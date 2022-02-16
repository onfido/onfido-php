# # CheckRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicant_id** | **string** | The ID of the applicant to do the check on. | [optional]
**report_names** | **string[]** | An array of report names (strings). | [optional]
**privacy_notices_read_consent_given** | **bool** | Boolean to indicate that the privacy notices and terms of service have been read and, where specific laws require, that consent has been given for Onfido. | [optional]
**document_ids** | **string[]** | Optional. An array of document ids, for use with Document reports only. If omitted, the Document report will use the most recently uploaded document by default. | [optional]
**applicant_provides_data** | **bool** | Send an applicant form to applicant to complete to proceed with check. Defaults to false. | [optional]
**asynchronous** | **bool** | Defaults to &#x60;true&#x60;. If set to &#x60;false&#x60;, you will only receive a response when all reports in your check have completed. | [optional] [default to true]
**tags** | **string[]** | Array of tags being assigned to this check. | [optional]
**suppress_form_emails** | **bool** | For checks where &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;, applicant form will not be automatically sent if &#x60;suppress_form_emails&#x60; is set to &#x60;true&#x60;. You can manually send the form at any time after the check has been created, using the link found in the form_uri attribute of the check object. Write-only. Defaults to false. | [optional]
**redirect_uri** | **string** | For checks where &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;, redirect to this URI when the applicant has submitted their data. Read-only. | [optional]
**consider** | **string[]** | Array of names of particular reports to return consider as their results. This is a feature available in sandbox testing | [optional]
**webhook_ids** | **string[]** | An array of webhook ids describing which webhooks to trigger for this check. | [optional]
**us_driving_licence** | **array<string,object>** | An object that contains all accepted fields for the Driver&#39;s License Data Verification report. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
