# This shell script deploys Skylight!
# To run, type "sh deploy.sh"
# If this file is not executable, type "chmod +x deploy.sh"


# Initialization of the branch name variable
[[ $1 = '' ]] && BRANCH="master" || BRANCH=$1

# Initialization of script variables
SSH_KEY_PATH="key.pem"
SERVER="zarembmj@ceclnx01.csi.miamioh.edu"
DEST_FOLDER="/public_html/skylight"

#Constructing one more variable with using declared before variables
PARAMS="BRANCH=\"$BRANCH\" DEST_FOLDER=\"$DEST_FOLDER\""

echo ===================================================
echo Autodeploy server
echo selected barcn $BRANCH
chmod 400 $SSH_KEY_PATH
echo ===================================================
echo Connecting to remote server...
ssh -i $SSH_KEY_PATH $SERVER $PARAMS 'bash -i'  <<-'ENDSSH'
    #Connected

    cd $DEST_FOLDER

    git stash
    # to stash package-lock.json file changes

    git pull
    git checkout $BRANCH
    git pull origin $BRANCH

    rm -rf node_modules/

    npm install

    pm2 stop skylight
    pm2 start skylight
    pm2 save
    pm2 list

    exit
ENDSSH