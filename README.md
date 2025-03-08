# AI Chatbox PHP

A simple AI-powered chatbox built with PHP that interacts with the Hugging Face API to generate responses.

## Features
- User-friendly interface for chatting with AI.
- Uses the Hugging Face API for AI-generated responses.
- Styled with CSS for a clean and modern look.

## Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/dhanushwaran06/ai-chatbox-php.git
   cd ai-chatbox-php
   ```

2. **Set Up a Local Server**
   - Use XAMPP, WAMP, or any local PHP server.
   - Move the project to the `htdocs` directory if using XAMPP.
   - Start Apache and MySQL services.

3. **Update API Key**
   - Open `index.php`
   - Replace `your_api_key` with your actual Hugging Face API key.

4. **Run the Application**
   - Open a browser and visit:
   ```
   http://localhost/ai-chatbox-php/public/
   ```

## File Structure
```
ai-chatbox-php/
├── index.php  (Main chatbox UI and backend logic)
│   ├── style.css  (Extracted CSS for better styling)
│── .gitignore
│── README.md
```

## Usage
1. Enter a question in the chat input box.
2. Click "Send" to communicate with the AI.
3. The response will appear below.

## Contributing
Feel free to fork this repository and submit pull requests for improvements.

