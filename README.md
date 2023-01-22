# Base64 filters

The plugin adds filters to Twig to encode and decode a string in base64.

The plugin is inspired by [String Base64](https://plugins.craftcms.com/string-base6) for reasons that are explained [issues](https://github.com/cavellblood/craft-string-base64/issues/1#issuecomment-1180450387) is that it was decided to make this plugin for craft cms 4.


## Requirements

This plugin requires Craft CMS 4.3.6.1 or later, and PHP 8.0.2 or later.

## Installation

You can install this plugin from the Plugin Store or with Composer.

#### From the Plugin Store

Go to the Plugin Store in your project’s Control Panel and search for “Base64 filters”. Then press “Install”.

#### With Composer

Open your terminal and run the following commands:

```bash
# go to the project directory
cd /path/to/my-project.test

# tell Composer to load the plugin
composer require useralberto/craft-base64-filters

# tell Craft to install the plugin
./craft plugin/install base64-filters
```


# Using Base64 filters

## Encoding

Input:
```
{{ 'Hola mundo'|base64enc }}
```
Output:

``` 
SG9sYSBtdW5kbw==
```

## Decoding
Input:
```
{{ 'SG9sYSBtdW5kbw=='|base64dec }}
```
Output:

``` 
Hola mundo
```

## Encrypts and base64-encodes
Input:
```
{{ 'Hola mundo'|base64encry }}
```
Output:

``` 
base64:Y3J5cHQ65VQ48cNrJesAzlRNO2EkkzQ4MmZjNDliYTE0YmJkMzNlZTU4NzQ3MjI2MmQxYmNmMmEwYjM2ODZhM2RlZjdkOWFkYTc4YTYwNDZmMDVjOGPlO1T5YKL3x7JWqlB6wkC86Stw0onxNcxFYwZfiTIRog==
```

## Base64-decodes and decrypts
Input:
```
{{ 'base64:Y3J5cHQ65VQ48cNrJesAzlRNO2EkkzQ4MmZjNDliYTE0YmJkMzNlZTU4NzQ3MjI2MmQxYmNmMmEwYjM2ODZhM2RlZjdkOWFkYTc4YTYwNDZmMDVjOGPlO1T5YKL3x7JWqlB6wkC86Stw0onxNcxFYwZfiTIRog=='|base64decry }}
```
Output:

``` 
Hola mundo
```
