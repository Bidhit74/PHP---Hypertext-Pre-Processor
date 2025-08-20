# 1. GET Method

-   Data is sent through the URL.

-   Less secure, visible in the browser.

-   Good for search queries, not for passwords.

# 2. POST Method

-   Data is sent hidden in the request body, not in the URL.

-   More secure than GET, best for login forms.

# $\_REQUEST in PHP

-   $\_REQUEST is a superglobal array in PHP.

-   It collects form data sent with GET, POST, or COOKIE methods.

-   It works as a combined way to access data without checking whether it came from GET or POST.

# What is Superglobal Variable in PHP?

-   Superglobals are built-in variables in PHP.

-   They are always accessible globally (inside & outside functions) without using global.

# Types of Superglobal Variables in PHP

1. $\_GET → Collects form data sent with GET method.

2. $\_POST → Collects form data sent with POST method.

3. $\_REQUEST → Collects data from GET, POST, and COOKIE.

4. $\_SESSION → Stores session variables.

5. $\_COOKIE → Stores cookie values.

6. $\_SERVER → Holds information about server and execution environment.

7. $\_FILES → Used for file uploads.

8. $\_ENV → Stores environment variables.

9. $GLOBALS → Access global variables inside functions.
