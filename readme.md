# Google Login API

The code is based on this 2 tutorial:
- Simple : [Sign in with Google PHP API](https://www.youtube.com/watch?v=lAqOZ3nXG7o)
- Advance : [Login With Google Account Using PHP & Client API & Bootstrap Design](https://www.youtube.com/watch?v=hazMyK_cnzk&t=916s)


This projects used `google/apiclient:2.1.0` to work with.


For simple tutorial, the file used is:
- google.php

For advance tutorial, the file used is:
- config.php: used as global config to store google client setting
- login.php: used to show login view
- callback.php: used to process authorization code from google
- index.php: used to show data retrieved from google
- logout.php: used to destroy session and revoke access from google