<header>
<h4>
    @include('theme')
    <form action="form" method="POST">
        @csrf
        
        <html>
            <img src="/asset/img/index.jpg">
            <link rel="stylesheet"  href="/asset/css/form.css">

            <body>
            <div class ="container">
            <ul>
            <h1 align="center">User Login</h1>
            
            <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date"
            min="2020-09-24" max="2025-12-31">
            <span style="color:red">@error('date'){{$message}}@enderror </span> 
            <br><br>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="enter user name"/>
            <span style="color:red">@error('username'){{$message}}@enderror </span> 
            <br><br>
            
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email">
            <span style="color:red">@error('email'){{$message}}@enderror </span>
            <br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span style="color:red">@error('password'){{$message}} A strong Password should countain a symbol and number @enderror </span>
            <br><br>

            <label for="phone">Enter your phone number:</label>
            <input type="tel" id="phone" name="phone" >
            <span style="color:red">@error('phone'){{$message}}@enderror </span>
            <br><br> 
            
            
                
                
            <script src="asset/js/countries.js"></script>   
            <body>
            Select Country :   <select id="country" name ="country"></select>
            <span style="color:red">@error('country'){{$message}}@enderror </span> 
            <br><br>
            State: <select name ="state" id ="state"></select>
            <span style="color:red">@error('state'){{$message}}@enderror </span> 
            
            <script language="javascript">
            populateCountries("country", "state");     
            </script>
            <br/><br/>
            </div>
            </body>

            
            Gender  
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            <span style="color:red">@error('gender'){{$message}}@enderror </span>
            <br><br> 

            
            
             Select Identification  <br>
            <input type="checkbox" id="Identification1" name="Identification[]" value="Aadhar">
            <label for="Identification1"> Aadhar Card</label>
            <input type="checkbox" id="Identification2" name="Identification[]" value="Pan">
            <label for="Identification2"> Pan Card</label>
            <input type="checkbox" id="Identification3" name="Identification[]" value="Passport">
            <label for="Identification3"> Passport</label>
            <input type="checkbox" id="Identification4" name="Identification[]" value="None">
            <label for="Identification4"> None</label><br>
            <span style="color:red">@error('Identification'){{$message}}@enderror </span>
            <br> 

            <p>Select your favorite Language. You may control-click to select more than one.</p>
            
            <select multiple size="4" name="Language[]">
                      <option value="C">C programing</option>
                      <option value="python">python programing</option>
                      <option value="java">java programing</option>
                      <option value="R">R programing</option>
                      <span style="color:red">@error('Language'){{$message}}@enderror </span>
            </select><br><br>
            
            <button type="submit"> Login </button>&nbsp; &nbsp; &nbsp; 
            <button type="reset" value="reset">Reset </button>
            <br><br>
            
        

            </ul>
        </div>
            </body>
            </header>
        </html>
    </form>
</h4>