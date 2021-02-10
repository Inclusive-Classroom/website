# Gold Team Spring 2021 Website

## Team Members

 * Colton Hurst
 * Dalton Hanbury
 * Grant Ralls
 * Greg Hubbard
 * Randy Layne
 * Travis Bennett
 
 ## Contribution instructions
 
 Instructions for contributing to the website. Especially for those not as familiar with Git. 
 Making the assumption that everyone is familiar with using the command line to navigate to 
 the project home directory. All commands are assuming the Bash shell. Other shells are similar.
 
 ###  Creating a local copy of the repository.
 
 Navigate to the directory you want the repository to be downloaded to.
 ```shell script
git clone https://github.com/randyL78/CS410_Team_Gold.git
```

### Working on a new feature

#### Create a new working branch

* Switch to the master branch
* Update the master branch
* Create and switch to the new branch

```shell script
git checkout master
git pull
git checkout -b <name-of-feature>
```

#### Creating a pull request

**Note:** make sure you have added the files and done a `git commit` before trying to push!
**Another Note: Never** add your IDE's configuration files to the repo! This will make life very
difficult for your fellow developers! These might be in an .idea or .vs_code folder.

* Push the code to the repo
```shell script
# first time for the branch
git push -u origin <name-of-feature>

# after that
git push
```
* From the GitHub repository online, click the `Pull requests` tab.
* There should be a callout that says create "pull request." Click it.
* Briefly describe the functionality you are adding in the description
* On the right hand side, choose someone to do a code review for your project

#### Code Review

Reviewer:

* Ensure that the description matches the changes that were made.
* If something feels like it should be tested, make sure there is a test written for it.
* Run all tests locally
* Give feedback, suggest changes.
* If everything looks good approve the pull request.

Reviewee:

* If the reviewer says to fix something... well then fix it!
* Re-request review if necessary
* Repeat until both you, and the reviewer are comfortable with the code and the reviewer 
  approves the request.
  
#### Deployment

* After the request has been approved, update the branch's code base. (GitHub will force 
  you to do this if it is necessary)
* Click merge into master
* You're done! Congrats on adding a new feature to the website!
