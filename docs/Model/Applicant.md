# # Applicant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the applicant. Read-only. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this applicant was created. Read-only. | [optional] 
**delete_at** | [**\DateTime**](\DateTime.md) | The date and time when this applicant is scheduled to be deleted. Read-only. | [optional] 
**href** | **string** | The uri of this resource. Read-only. | [optional] 
**sandbox** | **bool** | Read-only. | [optional] 
**title** | **string** | The applicant’s title | [optional] 
**first_name** | **string** | The applicant’s first name | [optional] 
**middle_name** | **string** | The applicant’s middle name(s) or initial | [optional] 
**last_name** | **string** | The applicant’s surname | [optional] 
**email** | **string** | The applicant’s email address. Required if doing a US check, or a UK check for which &#x60;applicant_provides_data&#x60; is &#x60;true&#x60;. | [optional] 
**gender** | **string** | The applicant’s gender. Valid values are male and female. | [optional] 
**dob** | [**\DateTime**](\DateTime.md) | The applicant’s date of birth | [optional] 
**telephone** | **string** | The applicant’s landline phone number | [optional] 
**mobile** | **string** | The applicant’s mobile phone number | [optional] 
**country** | **string** | The country where this applicant will be checked. This must be a three-letter ISO code e.g. GBR or USA | [optional] 
**nationality** | **string** | The applicant&#39;s nationality. This must be a three-letter ISO code e.g. GBR or USA | [optional] 
**mothers_maiden_name** | **string** | The applicant’s mothers maiden name | [optional] 
**country_of_birth** | **string** | The applicant’s country of birth | [optional] 
**town_of_birth** | **string** | The applicant’s town of birth | [optional] 
**previous_last_name** | **string** | The applicant’s previous last name | [optional] 
**addresses** | [**\Onfido\Model\Address[]**](Address.md) |  | [optional] 
**id_numbers** | [**\Onfido\Model\IdNumber[]**](IdNumber.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


