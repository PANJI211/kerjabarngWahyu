<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verification Form</title>
  <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <!-- Form Container -->
  <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">

    <!-- Form Header -->
    <h2 class="text-2xl font-bold mb-6 text-center">Verify Your Account</h2>

    <!-- Form -->
    <form action="/verify/{{ $unique_id }}" method="POST" class="space-y-4">
        @method('PUT')
        @csrf
   

      <!-- OTP Input -->
      <div>
        <input
          type="text"
          id="otp"
          name="otp"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Enter Otp"
          maxlength="6"
          required
        />
      </div>

      <!-- Submit Button -->
      <button
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition duration-200"
      >
        Verify Account
      </button>

    </form>

    <!-- Resend OTP Link -->
    <div class="mt-4 text-center">
      <a href="#" class="text-sm text-blue-600 hover:underline">Resend OTP</a>
    </div>

  </div>

</body>
</html>