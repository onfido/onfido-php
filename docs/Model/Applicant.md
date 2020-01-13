# # Applicant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the applicant. Read-only. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this applicant was created. Read-only. | [optional] 
**delete_at** | [**\DateTime**](\DateTime.md) | The date and time when this applicant is scheduled to be deleted. Read-only. | [optional] 
**href** | **string** | The uri of this resource. Read-only. | [optional] 
**sandbox** | **bool** | Read-only. | [optional] 
**first_name** | **string** | The applicant’s first name | [optional] 
**last_name** | **string** | The applicant’s surname | [optional] 
**email** | **string** | The applicant’s email address. Required if doing a US check, or a UK check for which &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;. | [optional] 
**dob** | [**\DateTime**](\DateTime.md) | The applicant’s date of birth | [optional] 
**address** | [**\Onfido\Model\Address**](Address.md) |  | [optional] 
**id_numbers** | [**\Onfido\Model\IdNumber[]**](IdNumber.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


