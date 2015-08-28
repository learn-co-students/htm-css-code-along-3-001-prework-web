

## Code Along Exercise 3 ~ 38min

1. Make sure you are on the master branch ♥ `git checkout master`
2. To get the most up to date starting code used for this exercise create a new remote called upstream ♥ `git remote add upstream git@github.com:learn-co-students/htm-css-code-along-3-<insert your github team name here>.git` (example batch: fe-0415 or ruby-0515).
3. Then pull down changes ♥ `git pull -f upstream master` ignoring any conflicts.
Next, get all the tags ♥ `git fetch upstream --tags`
Then in terminal type ♥ `git reset --hard step-2`  

If at the end of the video you have any issues updating your origin remote because of conflicts you can try adding the -f (forceful flag). like so ♥ `git push -f origin master`. **Please note that using the -f (forceful) flag is not reccomended in general** as it forcefully overrides the work on origin in this case. Thus it is considered highly destructive in practice and frowned upon. In this unique case it will be ok only because I am pasting my code over top of yours for the sake of sharing the most up to date code for these exercises. Here we are not concerned about loosing any work or publishing on top of conflicts. In normal day to day GIT practice you would instead resolve conflicts in each file and never use the -f flag when you are collaborating on work with a team.

<iframe width="640" height="480" src="//www.youtube.com/embed/aA8k-hK8qzg?rel=0" frameborder="0" allowfullscreen></iframe>
