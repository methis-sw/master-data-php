# UndeliverableContactResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**undeliverable** | **bool** | True if the address is undeliverable (means that the contact is deceased or moved) | 
**deceased** | **bool** | True if the contact is deceased | 
**moved** | **bool** | True if the contact has moved | 
**new_address_available** | **bool** | True if a new address is available. This is mostly when the contact has moved, but never if the contact is deceased. If true, the new address will be given in \&quot;contact\&quot; | 
**contact** | [**\METHIS\ContactObject**](ContactObject.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


