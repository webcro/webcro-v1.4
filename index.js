require('dotenv').config();
const fs = require('fs');
const express = require('express');
const { Server } = require('socket.io');
const { createServer } = require('node:http');
const TelegramBot = require('node-telegram-bot-api');
const axios = require('axios');

const jsonFilePath = 'verify/file.json';


const token = process.env.TELEGRAM_BOT_KEY // Replace with your bot's token
const chat_id = process.env.CHAT_ID

const app = express();

const server = createServer(app);
const io = new Server(server);

// Create a new bot instance
const bot = new TelegramBot(token, { polling: true });


bot.on('callback_query', (query) => {
    const chatId = query.message.chat.id;
    const data = query.data;
    const splitData = data.split(":");
    const action = splitData[0]; // 'good' or 'bad'
    const ip = splitData[1];


    fs.readFile(jsonFilePath, (err, data) => {
        if (err && err.code === 'ENOENT') {
            // If the file doesn't exist, create an empty object
            data = '{}';
        } else if (err) {
            throw err;
        }

        let json;
        try {
            json = JSON.parse(data.toString() || '{}');
        } catch (parseError) {
            console.error('Error parsing JSON:', parseError);
            json = {}; // Initialize as an empty object in case of error
        }

          // Append or update the entry
          json[ip] = { action: action };

          // Write the updated JSON back to the file
          fs.writeFile(jsonFilePath, JSON.stringify(json, null, 4), (err) => {
              if (err) throw err;
              console.log('Data appended to JSON file:', jsonFilePath);
          });
    });

  });

// Handle other types of updates (e.g., inline queries, callbacks) as needed

// Start the bot
bot.on('polling_error', (error) => {
  console.error(error);
});

console.log('Bot is running...');



server.listen(3000, () => {
    console.log('HTTPS server running on port 3000');
  });
