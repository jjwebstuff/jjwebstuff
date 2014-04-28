#Using Jekyll to Build the Site#

##Installing Jekyll (On a Mac)##
From a terminal command prompt:
	curl -sSL https://get.rvm.io |bash

###After the install completes:###
	bash --login
	rvm install 2.0.0
	gem install jekyll
	gem install kramdown

###Fetch the repos###
	git init
	git remote add origin https://github.com/jjwebstuff/jjwebstuff.git
	git pull origin master

##Modifying Jekyll Code##

_includes   -- This directory houses HTML snippets that you can include in your primary layouts. You can use this to create headers, footers or navigation bars. Basically anything that repeats.

_layouts    -- This is where you come up with basic templates for specific page types. 

_posts -- This is where you can create actual posts. Make sure that your file is formatted as YYYY-MM-DD-name-of-the-post-no-spaces.

You can check the [Jekyll site](http://jekyllrb.com) for more specific documentation.

##Testing your code##
You can launch a test Jekyll server by executing the below command in the root of the directory.
	jekyll serve
	
When you're done, commit the code and push it to the repo.  There's no need to build the jekyll site ( *jekyll build*) before you commit it because the commit hook will build it for you.