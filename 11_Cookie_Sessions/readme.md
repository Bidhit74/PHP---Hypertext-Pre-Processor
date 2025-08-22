# Cookies

-   Cookies ka use client-side par chhoti information store karne ke liye hota hai (browser me), jaise username, preferences, login info etc.

-   🔹 Syntax: setcookie(name, value, expire, path, domain, secure, httponly);
-   stecookie(1 Required, all optional)

# ⚡ Key Points:

-   Cookies client-side browser me store hoti hain.

-   setcookie() ko header send hone se pehle call karna padta hai.

-   Cookie ko expire time 0 ya past time set karke delete kiya ja sakta hai.

# Delete Cookie ⚡ Key Points:

-   Delete karne ke liye expire time ko past me set karte hain (time() - 3600).

-   Cookie ka name aur path same hona chahiye jo set karte waqt diya tha.

-   Cookie client browser me store hoti hai, server side par automatically delete nahi hoti; browser request ke sath expire check karta hai.
