# Google reCAPTCHA v3 Implementation Guide

## ✅ Implementation Complete

Google reCAPTCHA v3 has been successfully implemented across all forms on the SmartSchool Plus website.

---

## 📋 **What Was Implemented**

### **1. reCAPTCHA Keys Configuration**
- **Site Key**: `6LdiU08sAAAAAGXR_FpHTbhBoNq2bydsjTmy9v4o`
- **Secret Key**: `6LdiU08sAAAAAJPLv17NBJdOC4fh2Ap0Nu1lcANL`
- **Location**: `.env` file (lines 66-67)

### **2. Forms Protected**
1. **Contact Us Form** (`contact_us.blade.php`)
   - Route: `/contact-us`
   - Form ID: `#enquiry-form`
   
2. **Enquiry Form** (`enquiry.blade.php`)
   - Route: `/enquiry`
   - Form ID: `#contact-form`

### **3. Backend Validation**
- **Controller**: `FormController.php`
- **Verification Method**: Server-side token validation
- **Score Threshold**: 0.5 (blocks suspicious submissions)
- **Error Handling**: Returns JSON error if verification fails

---

## 🔧 **How It Works**

### **Frontend Flow:**

1. **User fills out the form** and clicks Submit
2. **reCAPTCHA v3 executes invisibly** (no checkbox/challenge)
3. **Token is generated** by Google's reCAPTCHA API
4. **Token is appended** to form data
5. **Form submits via AJAX** with token included

### **Backend Flow:**

1. **FormController receives** the form data + token
2. **Token is validated** against Google's API
3. **Score is checked** (must be ≥ 0.5)
4. **If valid**: Form is processed and saved to database
5. **If invalid**: Error message returned to user

---

## 📁 **Files Modified**

### **Environment Configuration**
```
.env
```
- Updated `RECAPTCHA_SITE_KEY`
- Updated `RECAPTCHA_SECRET_KEY`

### **Backend (PHP/Laravel)**
```
app/Http/Controllers/FormController.php
```
- Added reCAPTCHA token validation
- Added GuzzleHTTP client for API verification
- Added score threshold check (0.5)
- Added error handling for failed verification

### **Frontend (Blade Templates)**
```
resources/views/frontend/pages/contact_us.blade.php
resources/views/frontend/pages/enquiry.blade.php
```
- Added reCAPTCHA v3 script
- Added token generation on form submit
- Added token to FormData before AJAX submission
- Added SweetAlert for user feedback
- Added error handling for failed submissions

---

## 🎯 **Key Features**

### **1. Invisible Protection**
- No user interaction required
- No "I'm not a robot" checkbox
- Seamless user experience

### **2. Score-Based Detection**
- Google assigns a score from 0.0 (bot) to 1.0 (human)
- Threshold set to 0.5 (balanced security)
- Suspicious activity is automatically blocked

### **3. Real-Time Validation**
- Token verified on every submission
- Invalid tokens rejected immediately
- Clear error messages for users

### **4. Comprehensive Error Handling**
- Network errors caught and logged
- User-friendly error messages via SweetAlert
- Submit button re-enabled after errors

---

## 🧪 **Testing the Implementation**

### **Test Valid Submission:**
1. Navigate to `/contact-us` or `/enquiry`
2. Fill out all required fields
3. Click "Submit Now"
4. ✅ Should see success message
5. ✅ Form should reset
6. ✅ Data should be saved to database

### **Test reCAPTCHA Protection:**
1. Open browser DevTools → Console
2. Submit form multiple times rapidly
3. ✅ reCAPTCHA should detect suspicious behavior
4. ✅ Low-score submissions should be blocked

### **Check Backend Logs:**
```bash
# View Laravel logs for reCAPTCHA errors
tail -f storage/logs/laravel.log
```

---

## 🔍 **Verification Checklist**

- [x] reCAPTCHA keys added to `.env`
- [x] Backend validation implemented in `FormController`
- [x] Frontend token generation added to both forms
- [x] AJAX submission includes reCAPTCHA token
- [x] Error handling implemented (frontend + backend)
- [x] SweetAlert notifications working
- [x] Form reset after successful submission
- [x] Submit button disabled during processing
- [x] CSRF token included in requests
- [x] Phone number formatting preserved

---

## 🛡️ **Security Configuration**

### **Score Threshold**
```php
if (!$body->success || $body->score < 0.5) {
    // Reject submission
}
```

**Adjust threshold if needed:**
- **0.3-0.4**: More lenient (allows more submissions)
- **0.5**: Balanced (recommended)
- **0.6-0.7**: Stricter (may block some legitimate users)

### **API Verification Endpoint**
```
https://www.google.com/recaptcha/api/siteverify
```

---

## 📊 **Monitoring & Analytics**

### **View reCAPTCHA Analytics:**
1. Go to [Google reCAPTCHA Admin](https://www.google.com/recaptcha/admin)
2. Select your site key
3. View:
   - Request volume
   - Score distribution
   - Blocked attempts
   - Error rates

---

## 🚨 **Troubleshooting**

### **Issue: "reCAPTCHA verification failed"**
**Possible Causes:**
- Invalid site/secret keys
- Network connectivity issues
- Google API rate limiting

**Solution:**
1. Verify keys in `.env` are correct
2. Check server can reach `google.com`
3. Review Laravel logs for detailed errors

### **Issue: Form submits without reCAPTCHA**
**Solution:**
- Ensure reCAPTCHA script is loaded before form submission
- Check browser console for JavaScript errors
- Verify `grecaptcha` object is available

### **Issue: All submissions blocked**
**Solution:**
- Lower score threshold in `FormController.php`
- Check reCAPTCHA admin panel for issues
- Verify site key matches domain

---

## 📝 **Code Examples**

### **Frontend Token Generation**
```javascript
grecaptcha.ready(function() {
    grecaptcha.execute('SITE_KEY', {action: 'submit'})
        .then(function(token) {
            formData.append('recaptcha_token', token);
            // Submit form
        });
});
```

### **Backend Verification**
```php
$client = new Client();
$response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
    'form_params' => [
        'secret' => env('RECAPTCHA_SECRET_KEY'),
        'response' => $recaptchaToken,
        'remoteip' => $request->ip()
    ]
]);

$body = json_decode($response->getBody());
if (!$body->success || $body->score < 0.5) {
    // Reject
}
```

---

## 🔄 **Maintenance**

### **Regular Tasks:**
1. Monitor reCAPTCHA analytics weekly
2. Adjust score threshold based on false positives
3. Review error logs for verification failures
4. Update keys if compromised

### **Key Rotation:**
If keys need to be changed:
1. Generate new keys in Google reCAPTCHA Admin
2. Update `.env` file
3. Clear Laravel config cache: `php artisan config:clear`
4. Test all forms

---

## ✨ **Benefits**

- ✅ **Spam Protection**: Blocks automated bot submissions
- ✅ **User Experience**: No visible CAPTCHA challenges
- ✅ **Adaptive Security**: Score-based risk assessment
- ✅ **Analytics**: Detailed insights into traffic patterns
- ✅ **Compliance**: Helps meet security requirements

---

## 📞 **Support**

**Google reCAPTCHA Documentation:**
- [reCAPTCHA v3 Guide](https://developers.google.com/recaptcha/docs/v3)
- [Admin Console](https://www.google.com/recaptcha/admin)

**Implementation Support:**
- Check Laravel logs: `storage/logs/laravel.log`
- Browser console for frontend errors
- Network tab for API request/response

---

**Implementation Date**: January 19, 2026  
**Version**: reCAPTCHA v3  
**Status**: ✅ Active & Protecting All Forms
