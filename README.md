# CIT-Pics
Photo Sharing/Commenting Application


---------

CIT-Pics is a photo sharing/commenting application that I built Sophomore year of my undergrad. This was built with a bootstrap template
php, javascript/ajax/jquery. This project in total took me about 40 hours

----------

Instructions:

Semester	Project	– Photo	Sharing/Commenting	Application	(350	points)
OK, this one is big. The previous projects should help you get started, and combining the projects and our in-class
examples, you should have readily available code that can be manipulated to satisfy all of the requirements of this
project. Please note what this says. You should have snippets available to you for roughly 95% of this project. It is how
you apply these snippets to the requirements below that is important. This project brings together everything you have
learned this semester to create our web-based Photo Sharing/Commenting Application (CITPics). This system can be
used by anyone who registers for an account to upload their pictures (MUST keep uploads clean) and receive likes and
comments from other users on their photos. The system will also contain an admin page to allow an admin to remove
questionable images from the system.

You will implement the CITPics application using a combination of jQuery and PHP along with a predeveloped mySQL
database. You will need to develop your code with appropriate standards (jQuery calls when appropriate, ObjectOriented PHP where appropriate). You will also use the Bootstrap framework that you developed earlier in the
semester as a basis for your code. Your code should be placed in your folder on the CIT server
-private-, but the images will have to be uploaded to:
-private-.
Specifically, you will create the following:

Home Page
  • Contains information about your application (be creative)
  
  • Provides links to Register/Login
  
  • If a person is already logged in, goes to the photo browsing page
  
Registration Screen
    • Users of CITPics must register for an account before they are able to login and upload photos.
  
    • All registrants will be normal users (0 for value of u_isAdmin)
  
    • Registration should ask the user for:
  
    o First name
  
    o Last name
  
    o E-mail
  
    o Password
  
    o Geographic Location (zip code)
  
Login Screen
    § After registration, a user must login
    
    § This page will present the user with a login in screen.
    
    § There will be one user (admin) already in the database:
    
    § Username: admin@citpics.com, Password: adminofPics, 1 for u_isAdmin
    
    § Logging in as the admin will take the user directly to the admin page
    
Photo Viewing Page
    § Once logged in, users who are not admins will arrive at this page

    § This page should show the user their own name

    § This page will also show the user all photos uploaded by all users (making this easy on everyone)

    o Specific information shown for each image:

    § Title

    § Image itself (thumbnail image)

    § Summary

    § # of Likes

    § Link to Comments for that photo

    § Clicking an image will bring up the full size version of the image

    o HINT: You should use a jQuery plugin for this
  
Photo Upload Utility
    § This page will allow the user to upload a new pic to the system
    
    § When uploading, the user must complete a form with the following fields:
    
    o Title for this image (128 characters or less)
    
    o Summary for this image (can be paragraphs of data)
    
    § The upload form must be validated, meaning a file and the two fields above must be present before proceeding
    
    o You can use HTML or jQuery validation
    
    § When uploading, values for all fields in the database table for pics should be populated
    
    § You will have to upload your images to -private- (NOTE this folder’s location in
      relation to your own folder for the class. This is very important).
    
 Photo Commenting Utility

    § When a user wishes to view the comments for a pic, all comments will be provided in a list, sorted by the date
      the comment was made (Descending order)
      
    § At the bottom of the list of comments, the user should be able to add a new comment for that particular pic.
      o When adding a new comment, you must use AJAX to send the new comment to a page for database
      processing and also dynamically update the list of comments shown for the image to include the new
      comment at the top of the list.
    
Photo Like Utility
    § Must provide a way for a user to like an image and when an image is liked, if it has not already been liked by that
      user (see below), increment the number of likes for that particular image in the database.
      
    o When an image is liked, if it is allowed (see below), use AJAX to update the database and also jQuery to
      update the # of likes for that particular pic
      
    o NOTE: You must be able to limit the liking of an individual photo to one time per user per computer.
      HINT: Think cookies.
   
Admin Page
    § From here, the admin should see a list of all users in the system.
    
    § Clicking on a user’s name should present all images uploaded by that particular user.
    
    § This page also needs to allow an admin to remove (delete) an offending image from the system.
  
Assumptions/Questions
    - Always ask for clarification if you are confused on a requirement. Never assume.
    
    - Ask questions early and ask often
    
    - START now… Literally. Do not wait until the end of the semester, or chances are, you will not complete this
      project.
