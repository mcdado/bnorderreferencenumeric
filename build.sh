#!/bin/bash

FOLDERNAME=$(dirname $(pwd))
PROJNAME=$(basename $(pwd))
rsync -a --exclude-from=.rsyncrc $(pwd) $TMPDIR
cd $TMPDIR
mkdir -p $FOLDERNAME/$PROJNAME/dist/
zip -rq $FOLDERNAME/$PROJNAME/dist/latest-$PROJNAME.zip $PROJNAME
cd $FOLDERNAME/$PROJNAME
rm -rf $TMPDIR/$PROJNAME
