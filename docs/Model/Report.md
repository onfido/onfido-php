# Report

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the report. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time at which the report was first initiated. | [optional] 
**href** | **string** | The API endpoint to retrieve the report. | [optional] 
**name** | **string** | Report type string identifier. | [optional] 
**status** | **string** | The current state of the report in the checking process. | [optional] 
**result** | **string** | The result of the report. | [optional] 
**sub_result** | **string** | The sub_result of the report. It gives a more detailed result for document reports only, and will be null otherwise. | [optional] 
**variant** | **string** | Report variant string identifier. Some reports e.g. criminal_history have sub-types, which are identified by this field. | [optional] 
**options** | **object** | Report options. Some reports e.g. criminal_history expose additional options. | [optional] 
**breakdown** | **object** | The details of the report. This is specific to each type of report. | [optional] 
**properties** | **object** | The properties associated with the report, if any. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


