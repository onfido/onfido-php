# # Check

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the check. Read-only. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this check was created. Read-only. | [optional] 
**href** | **string** | The uri of this resource. Read-only. | [optional] 
**status** | **string** | The current state of the check in the checking process. Read-only. | [optional] 
**result** | **string** | The overall result of the check, based on the results of the constituent reports. Read-only. | [optional] 
**download_uri** | **string** | A link to a PDF output of the check results. Append &#x60;.pdf&#x60; to get the pdf file. Read-only. | [optional] 
**form_uri** | **string** | A link to the applicant form, if &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;. Read-only. | [optional] 
**redirect_uri** | **string** | For checks where &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;, redirect to this URI when the applicant has submitted their data. Read-only. | [optional] 
**results_uri** | **string** | A link to the corresponding results page on the Onfido dashboard. | [optional] 
**report_names** | **string[]** | An array of report names (strings). | [optional] 
**applicant_id** | **string** | The ID of the applicant to do the check on. | [optional] 
**privacy_notices_read_consent_given** | **bool** | Indicates whether the privacy notices and terms of service have been read and, where specific laws require, that consent has been given for Onfido. | [optional] 
**tags** | **string[]** | Array of tags being assigned to this check. | [optional] 
**applicant_provides_data** | **bool** | Send an applicant form to applicant to complete to proceed with check. Defaults to false. | [optional] 
**suppress_form_emails** | **bool** | For checks where &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;, applicant form will not be automatically sent if &#x60;suppress_form_emails&#x60; is set to &#x60;true&#x60;. You can manually send the form at any time after the check has been created, using the link found in the form_uri attribute of the check object. Write-only. Defaults to false. | [optional] 
**asynchronous** | **bool** | Defaults to &#x60;true&#x60;. Write-only. If set to &#x60;false&#x60;, you will only receive a response when all reports in your check have completed. | [optional] 
**report_ids** | **string[]** | An array of report ids. | [optional] 
**document_ids** | **string[]** | Optional. An array of document ids, for use with Document reports only. If omitted, the Document report will use the most recently uploaded document by default. | [optional] 
**consider** | **string[]** | Returns a pre-determined consider sub-result in sandbox for the specific reports in the consider array. | [optional] 
**sub_result** | **string** | Triggers a pre-determined sub-result response for sandbox Document reports. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


