# Use the official Node image as the base image
FROM node:latest

# Set the working directory
WORKDIR /app

# Copy package.json and package-lock.json files
COPY package*.json ./

# Install the Angular CLI globally
RUN npm install -g @angular/cli

# Install dependencies
RUN npm install

# Copy the rest of the application code
COPY . .

# Expose port 4200
EXPOSE 4200

# Run ng serve with host 0.0.0.0
CMD ["npm", "start", "--", "--host", "0.0.0.0"]
