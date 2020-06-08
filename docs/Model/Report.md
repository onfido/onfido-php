# # Report

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the report. Read-only. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time at which the report was first initiated. Read-only. | [optional] 
**href** | **string** | The API endpoint to retrieve the report. Read-only. | [optional] 
**status** | **string** | The current state of the report in the checking process. Read-only. | [optional] 
**result** | **string** | The result of the report. Read-only. | [optional] 
**sub_result** | **string** | The sub_result of the report. It gives a more detailed result for document reports only, and will be null otherwise. Read-only. | [optional] 
**breakdown** | **map[string,object]** | The details of the report. This is specific to each type of report. Read-only. | [optional] 
**properties** | **map[string,object]** | The properties associated with the report, if any. Read-only. | [optional] 
**check_id** | **string** | The ID of the check to which the report belongs. Read-only. | [optional] 
**name** | **string** | The name of the report type. | 
**documents** | [**\Onfido\Model\ReportDocument[]**](ReportDocument.md) | Array of objects with document ids that were used in the Onfido engine. [ONLY USED IN A DOCUMENT CHECK] | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


