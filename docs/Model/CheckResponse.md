# # CheckResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the check. | [optional]
**created_at** | **\DateTime** | The date and time when this check was created. | [optional]
**privacy_notices_read_consent_given** | **bool** | Indicates that the privacy notices and terms of service have been read and, where specific laws require, that consent has been given for Onfido. This will be true if specified during check creation, otherwise it will be null. | [optional]
**webhook_ids** | **string[]** | An array of webhook ids describing which webhooks to trigger for this check. | [optional]
**href** | **string** | The uri of this resource. | [optional]
**applicant_provides_data** | **bool** | Send an applicant form to applicant to complete to proceed with check. Defaults to false. | [optional]
**applicant_id** | **string** | The ID of the applicant to do the check on. | [optional]
**status** | **string** | The current state of the check in the checking process. | [optional]
**tags** | **string[]** | Array of tags being assigned to this check. | [optional]
**result** | **string** | The overall result of the check, based on the results of the constituent reports. | [optional]
**form_uri** | **string** | A link to the applicant form, if &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;. | [optional]
**redirect_uri** | **string** | For checks where &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;, redirect to this URI when the applicant has submitted their data. | [optional]
**results_uri** | **string** | A link to the corresponding results page on the Onfido dashboard. | [optional]
**report_ids** | **string[]** | An array of report ids. | [optional]
**sandbox** | **bool** | Indicates whether the object was created in the sandbox or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
