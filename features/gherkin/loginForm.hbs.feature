Feature: Login to page 
  A login attempt with valid credentials
  Should be accepted
  A login attempt with bad credentials
  Should be rejected
    
  @javascript @snapshot
  Scenario: Login with bad credentials
{{>loginForm name="badusername@crossbrowsertesting.com" password="badpassword"}}
{{{spinner}}}
    Then the "Username or password is incorrect" element exists
    And I take a snapshot called 'failed_login'

  @javascript @snapshot    
  Scenario: Login with good credentials
{{>loginForm name="tester@crossbrowsertesting.com" password="test123"}}
{{{spinner}}}
    Then the "You are now logged in!" element exists
    And I take a snapshot called 'good_login'
   
