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
**form_uri** | **string** | A link to the applicant form, if the check is of type &#x60;standard&#x60;. Read-only. | [optional] 
**redirect_uri** | **string** | For &#x60;standard&#x60; checks, redirect to this URI when the applicant has submitted their data. Read-only. | [optional] 
**results_uri** | **string** | A link to the corresponding results page on the Onfido dashboard. | [optional] 
**type** | **string** | The type of the check, &#x60;standard&#x60; or &#x60;express&#x60;. | 
**report_type_groups** | **string[]** | Array containing ids of the Report type groups being requested for. Write-only. | [optional] 
**privacy_notices_read_consent_given** | **bool** | Indicates whether the privacy notices and terms of service have been read and, where specific laws require, that consent has been given for Onfido. | [optional] 
**tags** | **string[]** | Array of tags being assigned to this check. | [optional] 
**suppress_form_emails** | **bool** | For standard checks, applicant form will not be automatically sent if this is set to true. You can manually send the form at any time after the check has been created, using the link found in the form_uri attribute of the check object. Write-only. Defaults to false. | [optional] 
**charge_applicant_for_check** | **bool** | For standard checks, applicants will be presented with a mandatory payment screen before they can submit the applicant form, if this is set to true. In this case, your account will not be charged. Write-only. Defaults to false. | [optional] 
**brand_id** | **string** | ID of the brand under which the check should be conducted. Write-only. | [optional] 
**asynchronous** | **bool** | If this is set to true, we will queue checks for processing and return a response immediately. You can configure webhooks to notify you when the report is complete. Write-only. Defaults to false. | [optional] 
**reports** | [**\Onfido\Model\Report[]**](Report.md) | An array of reports. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


