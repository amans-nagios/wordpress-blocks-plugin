# A Wordpress plugin for custom-made Wordpress Gutenberg blocks. 

*Built for Nagios Enterprises and its associated wordpress instances.*


---


## Instructions:

**Create block and add it to the list**
- Take the existing /src files and package.json and replace content where necessary. Don't forget to change the names and paths
- No need to touch the /build directory, those files will update themselved in this process

**Save content, build, and zip up files**
- 'CTRL + S' on each updated file
- Open the terminal (bash) and navigate (`cd`) to the correct directory (`~/wordpress-blocks-plugin`, or something of that nature)
- `npm i` to install dependencies as needed
- `npm run build` to update /build files to match /src files
- Zip files `7z a -xr@.zipignore name-of-block.zip .` (if using a compression tool other than 7-Zip, replace `7z` with the proper verb)

**Push new content to the GitHub repository**
- [Custom Block Repo](https://github.com/amans-nagios/wordpress-blocks-plugin/)
- For now, create a new branch for each individual plugin. In the future, there will be a single plugin with all of the custom blocks
- Navigate to the GitHub repo, or the local directory, and locate the .zip
- To download the zip from GitHub, choose your plugin's branch, click on the your-custom-plugin.zip file, and click the "View raw" link. The download should/will begin

**Upload the new plugin to Wordpress**
- Open your wp-admin wordpress dashboard. On the left-hand sidebar, click "Plugins"
- At the top of the page, click "Add New Plugin"
- At the top of the page, click "Upload Plugin"
- Click the "Browse..." button, select the new plugin .zip file, click "Open"
- Click the "Install Now" button. After a short time, the plugin will be uploaded!
- After installation, you may need to navigate back to the Installed Plugins page and activate the new plugin

**Happy Editing!**
- Your new plugin should be installed and ready to go. It will appear in the list with all other Gutenberg blocks while editing pages/blogs.


---


**Blocks:**
| Block | Description |
| :--- | :--- | 
| **copyright-date-block** | sample dynamic or static block of copyright year  |
| **custom-block-2** | descriptions of block |
| **custom-block-3** | descriptions of block |
| **More-To-Come** | descriptions of blocks |


---


**Authors:** 
| Collaborators | Git Username | Contributions |
| :--- | :--- | :--- |
| **Austin Mans** | amans-nagios | Copyright-date-block, custom-block-2 |
| **Taylor Steele** | steelet8833 | custom-block-3 |
