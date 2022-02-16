# # ApplicantRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The applicant’s first name | [optional]
**last_name** | **string** | The applicant’s surname | [optional]
**email** | **string** | The applicant’s email address. Required if doing a US check, or a UK check for which &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;. | [optional]
**dob** | **\DateTime** | The applicant’s date of birth | [optional]
**address** | [**\Onfido\Model\Address**](Address.md) |  | [optional]
**id_numbers** | [**\Onfido\Model\IdNumber[]**](IdNumber.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
