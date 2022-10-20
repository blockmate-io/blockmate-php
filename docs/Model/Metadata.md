# # Metadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image** | **string** | String - URL to the NFT asset image. Can be standard URLs pointing to images on conventional servers, IPFS, or Arweave. Most types of images (SVGs, PNGs, JPEGs, etc.) are supported by NFT marketplaces. | [optional]
**external_url** | **string** | String - The image URL that appears alongside the asset image on NFT platforms. | [optional]
**background_color** | **string** | String - Background color of the NFT item. Usually must be defined as a six-character hexadecimal. | [optional]
**name** | **string** | String - Name of the NFT asset. | [optional]
**description** | **string** | String - Human-readable description of the NFT asset. (Markdown is supported/rendered on OpenSea and other NFT platforms) | [optional]
**attributes** | [**\blockmate\Model\MetadataAttributesInner[]**](MetadataAttributesInner.md) | Object - Traits/attributes/characteristics for each NFT asset. | [optional]
**media** | [**\blockmate\Model\NftMedia**](NftMedia.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
