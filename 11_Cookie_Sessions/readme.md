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

# 🔹 Session in PHP

-   Session ek server-side storage hai jo user ke data ko temporarily store karta hai.

-   Ye browser close hone tak ya session destroy hone tak exist karta hai.

-   Session ka use login info, shopping cart, user preferences store karne ke liye hota hai.

# ⚡ Key Points:

-   Session server-side store hota hai, cookie ke opposite.

-   Use session_start() har page pe karna zaruri hai.

-   Data store karne ke liye $\_SESSION['key'] = value; use hota hai.

-   Destroy karne ke liye session_destroy() use hota hai.

# Session vs Cookie

-   Cookie = chhoti file browser me store hoti hai.

-   Session = server me temporary data store hota hai.

-   Cookie → Less secure, user manipulate kar sakta hai.

-   Session → More secure, server ke andar store hota hai.

-   Cookie → User preferences, remember me, tracking.

-   Session → Login info, cart items, sensitive user data.
