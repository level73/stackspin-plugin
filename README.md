![](https://stackspin.net/assets/images/logo.svg)


# stackspin-plugin

The Stackspin plugin for Wordpress integrates Stackspin automated management of the Wordpress instance and the core plugins. 

## What does the Stackspin plugin do?

### Disables Deactivation of core plugins
Stackspin requires the following plugins to always be installed and active, in order to sync user profiles and enable setup when Stackspin is restarted or updated:
- [OpenID Generic Connect Client](https://wordpress.org/plugins/daggerhart-openid-connect-generic/)
- the Stackspin plugin itself

Wordpress admins won't be able to deactivate or remove these plugins.

### Disables Wordpress core updates from within Wordpress

Stackspin takes care of updating Wordpress automatically; for that reason we remove the Wordpress update option from the Wordpress admin dashboard. 

### Adds a "Stackspin" sidebar menu item

On the bottom of the sidebar menu, the Stackspin Wordpress instance will show a sidebar item called "Stackspin." Clicking on this item will show a text page that explains what the plugin does.


---
Here is the draft text for the Stackspin sidebar menu page:


## This Wordpress instance is powered by Stackspin

Welcome to your Wordpress website. It is almost identical to a regular Wordpress instance -- you can install plugins, change settings, add and customize themes, etc. 

It also has some Stackspin-specific features:

### Automatic updates of Wordpress and core plugins
Stackspin takes care of keeping Wordpress and the core plugins up-to-date and secure. This means you won't see the "Update" section on the dashboard that you might expect. Also, two core plugins cannot be removed/deactivated because they are required in order to integrate with the Stackspin dashboard.

### All users are managed through Stackspin
Since you add and manage users on the Stackspin dashboard for all your Stackspin apps, the "Users" page in Wordpress has some limitations. Namely, you cannot delete users, and you cannot change certain parts of the user profile because those are defined in Stackspin.

### Some user roles are managed through Stackspin
When giving users access to Wordpress on the Stackspin dashboard, their role will automatically be "Author" if they are regular users, and "Admin" if they are Stackspin administrators.

You can choose to change Authors to any other role within Wordpress, except Admin -- this role is reserved for users who are also Administrators on Stackspin.

### An important note on security

Stackspin automatically updates itself and all the apps it includes. This lets Stackspin guarantee safety and security of its apps. Wordpress lets you install custom plugins and themes: please keep in mind that Stackspin cannot control or vouch for the safety and security of Wordpress once other plugins and themes are installed. 

While we can keep the core Wordpress codebase up to date, third party plugins might be less secure and updated less frequently, and this might cause security issues.

If you are particularly concerned about safety and security of your Stackspin-powered website, please take care when installing plugins of themes and, if at all possible, avoid installing them. 


