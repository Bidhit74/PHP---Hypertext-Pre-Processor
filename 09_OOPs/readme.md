# Object-Oriented Programming System.

-   It is a programming paradigm that uses objects and classes to structure code in a reusable, modular, and organized way.

# 🔹 Main Concepts of OOPs

-   🔹Class → Blueprint/template for creating objects.

-   🔹Object → Instance of a class (real-world entity).

-   🔹Encapsulation → Binding data and methods together in a single unit (class).

-   🔹Abstraction → Hiding internal details, showing only necessary info.

-   🔹Inheritance → One class can use properties & methods of another class.

-   🔹Polymorphism → Same function name used in different ways.

# Access Modifiers in PHP (OOPs)

-   Access modifiers decide kahan se property/method ko access kar sakte ho.

Modifier -- Same Class -- Child Class -- Outside Class
Public ----- ✅ Yes ------ ✅ Yes ------- ✅ Yes
Protected -- ✅ Yes ------ ✅ Yes ------- ❌ No
Private ---- ✅ Yes ------ ❌ No -------- ❌ No

# Member Variable

-   Class ke andar declare kiya gaya variable jo object ka data store karta hai.
-   Inhe object ke through access kiya jata hai (using $this-> inside class, and -> operator outside).

# Member Function

-   Member function = methods of a class.

-   Ye functions class ke andar define hote hain.

-   Inka kaam hota hai member variables (properties) ko use ya modify karna.

-   Inhe object ke through call kiya jata hai.

# Overloading

-   PHP me function overloading (like Java/C++) directly support nahi hai.

-   PHP me overloading ka matlab hota hai: Dynamically properties aur methods ko create/access karna jo class me define nahi hote.

-   Ye kaam PHP ke magic methods se hota hai.

# ✅ Important Magic Methods for Overloading:

-   -   \_\_get($name) → Undefined property ko access karte waqt call hota hai.

-   -   \_\_set($name, $value) → Undefined property ko value assign karte waqt call hota hai.

-   -   \_\_call($name, $arguments) → Undefined/non-existing method ko call karne par chalta hai.

-   -   \_\_isset($name) → isset() ya empty() use karne par.

-   -   \_\_unset($name) → unset() use karne par.

# Overriding

-   Child class, parent ke method ko overwrite kar deti hai.

# Constructor in PHP

-   Constructor ek special function hai jo class ke andar hota hai.

-   Jab bhi class ka object banate hain → ye automatically call hota hai.

-   Syntax: \_\_construct()

# Destructor in PHP

-   Destructor bhi ek special function hai jo class ke andar hota hai.

-   Jab object destroy hota hai (script khatam hone par ya unset karne par) → ye automatically call hota hai.

-   Syntax: \_\_destruct()

# Class Constant

-   Constant ek fixed value hoti hai jo change nahi hoti.

-   Class ke andar constant ko const keyword se define karte hain.

-   Access karne ke liye ClassName::CONSTANT_NAME ya self::CONSTANT_NAME use hota hai.
