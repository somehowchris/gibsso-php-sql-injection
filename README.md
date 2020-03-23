# SQL Injection

## Anwendungsbeispiel Daten ausspähen

### Solutions to mitigate SQL injection

These two methods are the most widely used ones. Though there are methods like `escaping` and `sql statement scanning` which are usually implemented by orm but those do just part of the job.

#### Input value validation

One of the most recommended ways to check inputs are input validations. In rest applications you might have a schema for inputs but actually can't control what's been but into the senders body. Trust is good control is better and therefore for your own safety you should check what's been presented to you.

#### Parameterized statements and queries

Using parameterized statements and queries is usually also implemented by ORMs. Though it might be one of the most methods used on the database side to be prepared against attacks. 

### Implementation

The two options above have been implemented in the code though a method `isInteger` and the mysqli provided prepare statements 

## Anwendungsbeispiel Login

### What could go wrong?

#### Correct choice of input field type

There are multiple options of input fields. There is an extra option `password` for input fields which are passwords.

#### Using other methods than GET to transfer values

You should never use `GET` to transfer sensible values.

#### Storing clear text passwords

Passwords should never be stored in any clear text format. Access to the data could compromise your whole user base. Using some hash functionality is an easy to use implementation.

> Currently not implemented due to limitations in the setup: Never store credentials in your codebase, use a vault service or store them in your environment

#### Directly inserted values in SQL statement

As you can imagine directly inserting unfiltered inputs in your SQL statement string can lead to out of control statements.

#### Check your inputs

Validate your inputs as you never know what you gonna get.

#### Escaping and sanitizing inputs

Escape and sanitize your input as you never know if your inputs are formatted correctly

#### Unchecked auth

This application has no checking of auth rather than checking if there is a `pid` value in the session storage.

#### Trustless auth

We can manipulate stuff in the session store with tools like `postman` or your browser. Therefore I can guess a users id and act in his behalf which isn't favourable in anyway.

#### Minimal measurement for passwords

If you have to create your own login please implement some sort of minimal measurement for password difficulty

#### Credentials in your code

**Never store credentials in your code**

### Implementation

Due to limitations in infrastructure for this project we have credentials in the code and can not check if the user stored in the session is eligible.



