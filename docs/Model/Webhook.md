# Webhook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the webhook. | [optional] 
**url** | **string** | The url of the webhook | [optional] 
**token** | **string** | Webhook secret token used to sign the webhook&#39;s payload | [optional] 
**enabled** | **bool** | Determine if the webhook is active. | [optional] 
**href** | **string** | The API endpoint to retrieve the webhook. | [optional] 
**environments** | **string[]** | The environments from which the webhook will receive events. | [optional] 
**events** | **string[]** | The events that will be published to the webhook. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


