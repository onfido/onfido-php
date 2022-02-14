# # Report

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the report. | [optional]
**created_at** | **\DateTime** | The date and time at which the report was first initiated. | [optional]
**name** | **string** | The name of the report type. |
**href** | **string** | The API endpoint to retrieve the report. | [optional]
**status** | **string** | The current state of the report in the checking process. | [optional]
**result** | **string** | The result of the report. | [optional]
**sub_result** | **string** | The sub_result of the report. It gives a more detailed result for document reports only, and will be null otherwise. | [optional]
**breakdown** | **array<string,object>** | The details of the report. This is specific to each type of report. | [optional]
**properties** | **array<string,object>** | The properties associated with the report, if any. | [optional]
**documents** | [**\Onfido\Model\ReportDocument[]**](ReportDocument.md) | Array of objects with document ids that were used in the Onfido engine. [ONLY USED IN A DOCUMENT CHECK] | [optional]
**check_id** | **string** | The ID of the check to which the report belongs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
