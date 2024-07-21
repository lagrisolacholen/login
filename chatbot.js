document.addEventListener("DOMContentLoaded", function() {
    const chatbotMessages = document.getElementById("chatbot-messages");
    const chatbotInput = document.getElementById("chatbot-input");

    function addMessageToChatbot(message, fromUser = true) {
        const messageElement = document.createElement("div");
        messageElement.textContent = message;
        messageElement.className = fromUser ? "user-message" : "bot-message";
        chatbotMessages.appendChild(messageElement);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
    }

    function sendMessage() {
        const message = chatbotInput.value.trim();
        if (message) {
            addMessageToChatbot(message);
            chatbotInput.value = "";
            // Simulate bot response
            setTimeout(() => {
                addMessageToChatbot("This is a simulated response from the bot.", false);
            }, 1000);
        }
    }

    document.querySelector("button").addEventListener("click", sendMessage);

    chatbotInput.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            sendMessage();
        }
    });
});
