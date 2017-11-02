<?php

$app->post('/api/Wordnik/reverseDictionarySearch', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','query']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'api_key','query'=>'query'];
    $optionalParams = ['includePartOfSpeech'=>'includePartOfSpeech','findSenseForWord'=>'findSenseForWord','includeSourceDictionaries'=>'includeSourceDictionaries','excludeSourceDictionaries'=>'excludeSourceDictionaries','excludePartOfSpeech'=>'excludePartOfSpeech','minCorpusCount'=>'minCorpusCount','maxCorpusCount'=>'maxCorpusCount','minLength'=>'minLength','maxLength'=>'maxLength','expandTerms'=>'expandTerms','includeTags'=>'includeTags','sortBy'=>'sortBy','sortOrder'=>'sortOrder','skip'=>'skip','limit'=>'limit'];
    $bodyParams = [
       'query' => ['includePartOfSpeech','excludeSourceDictionaries','api_key','query','findSenseForWord','includeSourceDictionaries','excludePartOfSpeech','minCorpusCount','maxCorpusCount','minLength','maxLength','expandTerms','includeTags','sortBy','sortOrder','skip','limit']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    $data['includeSourceDictionaries'] = \Models\Params::toString($data['includeSourceDictionaries'], ','); 
    $data['excludePartOfSpeech'] = \Models\Params::toString($data['excludePartOfSpeech'], ','); 

    $client = $this->httpClient;
    $query_str = "http://api.wordnik.com:80/v4/words.json/reverseDictionary";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = [];
     

    try {
        $resp = $client->get($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});