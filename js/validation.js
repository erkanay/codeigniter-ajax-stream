/**
 * @author : erkanay
 * @file   : basic-javascript-validation
 * @aim    : it can be nice way to look structure of this file 
 * for javascript beginners and beginners of regular expression and/or
 * beginners of object oriented JS
 *             ^__^
 *             (oo)\_______
 *             (__)\       )\\\
 *                 ||----w |
 *                 ||     ||
 * happy coding !  
 * 
 */
/**
 * Create the Class
 * 
 */ 
 function Validation(){ }
/**
 * @param  mixed   password
 * @return boolean true | false
 *
 */
 Validation.prototype.isValidPassword = function(password){
    var pattern = new RegExp(/^[A-Za-z0-9!@#$%^&*()_]{6,20}$/);
    return pattern.test(password);
 };
/**
 * @param  mixed   user_name
 * @return boolean true | false
 *
 */
 Validation.prototype.isValidUserName = function(user_name){
    var pattern = new RegExp(/^[A-Za-z-0-9]{1,30}$/);   
    return pattern.test(user_name); 
 };

/**
 * @param  mixed    email
 * @return boolean  true | false
 * 
 */
 Validation.prototype.isValidEmail = function(email){
    var pattern = new RegExp(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/);
    return pattern.test(email);
 };
 /*---------------------------- or -------------------------------*/
 /**
  * @param <mixed>  param
  * @param regular  expression reg_ex
  * @param boolean  true | false
  * 
  */
 Validation.prototype.isValidAnyThing = function(param, reg_ex){
    var pattern = new RegExp(reg_ex);
    return pattern.test(param);
 };
 
 /**
  * Create instance of class 
  * 
  */ 
 var validate = new Validation();
 /**
  * Usage 
  * 
  */ 
 validate.isValidEmail('info@erkanay.com'); //returns true or false 
 //
 validate.isValidAnyThing('is_that_a_string_and_length_32_chars',/^[A-Za-z0-9_]{0,32}$/); //returns true or false
