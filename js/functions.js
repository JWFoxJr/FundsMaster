/**
 * Created by JetBrains PhpStorm.
 * User: jwfoxjr
 * Date: 8/21/11
 * Time: 11:37 PM
 * To change this template use File | Settings | File Templates.
 */

function validateNonEmpty(inputField, helpText) {
        // See if the input value contains any text
        if (inputField.value.length == 0) {
          // The data is invalid, so set the help message
          if (helpText != null)
            helpText.innerHTML = "Please enter a value.";
          return false;
        }
        else {
          // The data is OK, so clear the help message
          if (helpText != null)
            helpText.innerHTML = "";
          return true;
        }
      }

      function validateLength(minLength, maxLength, inputField, helpText) {
        // See if the input value contains at least minLength but no more than maxLength characters
        if (inputField.value.length < minLength || inputField.value.length > maxLength) {
          // The data is invalid, so set the help message
          if (helpText != null)
            helpText.innerHTML = "Please enter a value " + minLength + " to " + maxLength +
              " characters in length.";
          return false;
        }
        else {
          // The data is OK, so clear the help message
          if (helpText != null)
            helpText.innerHTML = "";
          return true;
        }
      }