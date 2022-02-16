# # ApplicantResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the applicant. | [optional]
**created_at** | **\DateTime** | The date and time when this applicant was created. | [optional]
**delete_at** | **\DateTime** | The date and time when this applicant is scheduled to be deleted. | [optional]
**href** | **string** | The uri of this resource. | [optional]
**first_name** | **string** | The applicant’s first name | [optional]
**last_name** | **string** | The applicant’s surname | [optional]
**email** | **string** | The applicant’s email address. Required if doing a US check, or a UK check for which &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;. | [optional]
**dob** | **\DateTime** | The applicant’s date of birth | [optional]
**address** | [**\Onfido\Model\Address**](Address.md) |  | [optional]
**id_numbers** | [**\Onfido\Model\IdNumber[]**](IdNumber.md) |  | [optional]
**sandbox** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
