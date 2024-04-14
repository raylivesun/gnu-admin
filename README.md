# Know your System Administrator
## A Field Guide
## by Stephan Zielinski

There are four major species of Unix sysad:

    The Technical thug — Usually a systems programmer who has been forced into system administration; writes scripts in a polyglot of the Bourne shell, sed, C, awk, Perl, and APL.

    The Administrative fascist — Usually a retentive drone (or rarely, a harridan ex-secretary) who has been forced into system administration.

    The Maniac — Usually an aging cracker who discovered that neither the Mossad nor Cuba are willing to pay a living wage for computer espionage. Fell into system administration; occasionally approaches major competitors with indesp schemes.

    The Idiot — Usually a cretin, or old COBOL programmer selected to be the system administrator by a committee of cretins, and old COBOL programmers.

How to Identify Your System Administrator

SITUATION: Low disk space

        Technical thug:  Writes a suite of scripts to monitor disk usage, maintain a database of historic disk usage, predict future disk usage via least squares regression analysis, identify users who are more than a standard deviation over the mean, and send mail to the offending parties. Places script in cron. Disk usage does not change, since disk-hogs, by nature, either ignore script-generated mail, or file it away in triplicate.

        Administrative fascist:  Puts disk usage policy in motd. Uses disk quotas. Allows no exceptions, thus crippling development work. Locks accounts that go over quota.

        Maniac:

        # cd /home
        # rm -rf `du -s * | sort -rn | head -1 | awk '{print $2}'`;

        Idiot:

        # cd /home
        # cat `du -s * | sort -rn | head -1 | awk '{ printf "%s/*\n", $2}'` | compress

SITUATION: Excessive CPU usage

        Technical thug:  Writes a suite of scripts to monitor processes, maintain a database of CPU usage, identify processes more than a standard deviation over the norm, and renice offending processes. Places script in cron. Ends up renicing the production database into oblivion, bringing operations to a grinding halt, much to the delight of the xtrek freaks.

        Administrative fascist:  Puts CPU usage policy in motd. Uses CPU quotas. Locks accounts that go over quota. Allows no exceptions, thus crippling development work, much to the delight of the xtrek freaks.

        Maniac:

        # kill -9 `ps -augxww | sort -rn +8 -9  | head -1 | awk '{print $2}'`

        Idiot:

        # compress -f `ps -augxww | sort -rn +8 -9  | head -1 | awk '{print $2}'`

SITUATION: New account creation

        Technical thug:  Writes Perl script that creates home directory, copies in incomprehensible default environment, and places entries in /etc/passwd, /etc/shadow, and /etc/group. (By hand, not with passmgmt.) Slaps on setuid bit; tells a nearby secretary to handle new accounts. Usually, said secretary is still dithering over the difference between ‘enter’ and ‘return’; and so, no new accounts are ever created.

        Administrative fascist:  Puts new account policy in motd. Since people without accounts cannot read the motd, nobody ever fulfills the bureaucratic requirements; and so, no new accounts are ever created.

        Maniac:  “If you're too stupid to break in and create your own account, I don't want you on the system. We've got too many goddamn sh*t-for-brains a**holes on this box anyway.”

        Idiot:

        # cd /home; mkdir "Bob's home directory"
        # echo "Bob Simon:gandalf:0:0::/dev/tty:compress -f" > /etc/passwd

SITUATION: Root disk fails

        Technical thug:  Repairs drive. Usually is able to repair filesystem from boot monitor. Failing that, front-panel toggles microkernel in and starts script on neighboring machine to load binary boot code into broken machine, reformat and reinstall OS. Lets it run over the weekend while he goes mountain climbing.

        Administrative fascist:  Begins investigation to determine who broke the drive. Refuses to fix system until culprit is identified and charged for the equipment.

        Maniac, large system:  Rips drive from system, uses sledgehammer to smash same to flinders. Calls manufacturer, threatens pets. Abuses field engineer while they put in a new drive and reinstall the OS.

        Maniac, small system:  Rips drive from system, uses ball-peen hammer to smash same to flinders. Calls Requisitions, threatens pets. Abuses bystanders while putting in new drive and reinstalling OS.

        Idiot:  Doesn't notice anything wrong.

SITUATION: Poor network response

        Technical thug:  Writes scripts to monitor network, then rewires entire machine room, improving response time by 2%. Shrugs shoulders, says, “I've done all I can do,” and goes mountain climbing.

        Administrative fascist:  Puts network usage policy in motd. Calls up Berkeley and AT&T, badgers whoever answers for network quotas. Tries to get xtrek freaks fired.

        Maniac:  Every two hours, pulls ethernet cable from wall and waits for connections to time out.

        Idiot:

        # compress -f /dev/en0

SITUATION: User questions

        Technical thug:  Hacks the code of emacs' doctor-mode to answer new users questions. Doesn't bother to tell people how to start the new “guru-mode”, or for that matter, emacs.

        Administrative fascist:  Puts user support policy in motd. Maintains queue of questions. Answers them when he gets a chance, often within two weeks of receipt of the proper form.

        Maniac:  Screams at users until they go away. Sometimes barters knowledge for powerful drink and/or sycophantic adulation.

        Idiot:  Answers all questions to best of his knowledge until the user realizes few Unix systems support punched cards or JCL.

SITUATION: Stupid user questions

        Technical thug:  Answers question in hex, binary, postfix, and/or French until user gives up and goes away.

        Administrative fascist:  Locks user's account until user can present documentation demonstrating their qualification to use the machine.

        Maniac:

        # cat > > ~luser/.cshrc
        alias vi 'rm \!*;unalias vi;grep -v BoZo ~/.cshrc > ~/.z; mv -f ~/.z ~/.cshrc'
        ^D

        Idiot:  Answers all questions to best of his knowledge. Recruits user to system administration team.

SITUATION: Process accounting management

        Technical thug:  Ignores packaged accounting software; trusts scripts to sniff out any problems & compute charges.

        Administrative fascist:  Devotes 75% of disk space to accounting records owned by root and chmod'ed 000.

        Maniac:  Laughs fool head off at very mention of accounting.

        Idiot:

        # lpr /etc/wtmp /usr/adm/paact

SITUATION: Religious war, BSD vs. System V

        Technical thug:  BSD. Crippled on System V boxes.

        Administrative fascist:  System V. Horrified by the people who use BSD. Places frequent calls to DEA.

        Maniac:  Prefers BSD, but doesn't care as long as his processes run quickly.

        Idiot:

        # cd c:

SITUATION: Religious war, System V vs. AIX

        Technical thug:  Weeps.

        Administrative fascist:  AIX—doesn't much care for the OS, but loves the jackboots.

        Maniac:  System V, but keeps AIX skills up, knowing full well how much Big Financial Institutions love IBM…

        Idiot:  AIX.

SITUATION: Balky printer daemons

        Technical thug:  Rewrites lpd in FORTH.

        Administrative fascist:  Puts printer use policy in motd. Calls customer support every time the printer freezes. Tries to get user who submitted the most recent job fired.

        Maniac:  Writes script that kills all the daemons, clears all the print queues, and maybe restarts the daemons. Runs it once a hour from cron.

        Idiot:

        # kill -9 /dev/lp ; /dev/lp &

SITUATION: OS upgrade

        Technical thug:  Reads source code of new release, takes only what he likes.

        Administrative fascist:  Instigates lawsuit against the vendor for having shipped a product with bugs in it in the first place.

        Maniac:

        # uptime
        1:33pm  up 19 days, 22:49,  167 users,  load average: 6.49, 6.45, 6.31
        # wall
        Well, it's upgrade time.  Should take a few hours.  And good luck on
        that 5:00 deadline, guys!  We're all pulling for you!
        ^D

        Idiot:

        # dd if=/dev/rmt8 of=/vmunix

SITUATION: Balky mail

        Technical thug:  Rewrites sendmail.cf from scratch. Rewrites sendmail in SNOBOL. Hacks kernel to implement file locking. Hacks kernel to implement “better” semaphores. Rewrites sendmail in assembly. Hacks kernel to …

        Administrative fascist:  Puts mail use policy in motd. Locks accounts that go over mail use quota. Keeps quota low enough that people go back to interoffice mail, thus solving problem.

        Maniac:

        # kill -9 `ps -augxww | grep sendmail | awk '{print $2}'`
        # rm -f /usr/spool/mail/*
        # wall
        Mail is down.  Please use interoffice mail until we have it back up.
        ^D
        # write max
        I've got my boots and backpack.  Ready to leave for Mount Tam?
        ^D

        Idiot:

        # echo "HELP!" | mail
        tech_support.AT.vendor.com%kremvax%bitnet!BIFF!!!

SITUATION: Users want phone list application

        Technical thug:  Writes RDBMS in Perl and Smalltalk. Users give up and go back to post-it notes.

        Administrative fascist:  Oracle. Users give up and go back to post-it notes.

        Maniac:  Tells the users to use flat files and grep, the way God meant man to keep track of phone numbers. Users give up and go back to post-it notes.

        Idiot:

        % dd ibs=80 if=/dev/rdisk001s7 | grep "Fred"

Other Guidelines

Typical root .cshrc file

        Technical thug:  Longer than eight kilobytes. Sources the output of a Perl script, rewrites itself.

        Administrative fascist:  Typical lines include

        umask 777
        alias cd 'cd \!*; rm -rf ching *hack mille omega rogue xtrek > /dev/null &'

        Maniac:  Typical lines include

        alias rm 'rm -rf \!*'
        alias hose kill -9 '`ps -augxww | grep \!* | awk \'{print $2}\'`'
        alias kill 'kill -9 \!* ; kill -9 \!* ; kill -9 \!*'
        alias renice 'echo Renice\?  You must mean kill -9.; kill -9 \!*'

        Idiot:  Typical lines include

        alias dir ls
        alias era rm
        alias kitty cat
        alias process_table ps
        setenv DISPLAY vt100

Hobbies, technical

        Technical thug:  Writes entries for Obsfuscated C contest. Optimizes INTERCAL scripts. Maintains ENIAC emulator. Virtual reality.

        Administrative fascist:  Bugs office. Audits card-key logs. Modifies old TVs to listen in on cellular phone conversations. Listens to police band.

        Maniac:  Volunteers at Survival Research Labs. Bugs office. Edits card-key logs. Modifies old TVs to listen in on cellular phone conversations. Jams police band.

        Idiot:  Ties shoes. Maintains COBOL decimal to roman numeral converter. Rereads flowcharts from his salad days at Rand.

Hobbies, nontechnical

        Technical thug:  Drinks “Smart Drinks.” Attends raves. Hangs out at poetry readings and Whole Earth Review events and tries to pick up Birkenstock MOTAS.

        Administrative fascist:  Reads Readers Digest and Mein Kampf. Sometimes turns up car radio and sings along to John Denver. Golfs. Drinks gin martinis. Hangs out in yuppie bars and tries to pick up dominatrixes.

        Maniac:  Reads Utne Reader and Mein Kampf. Faithfully attends Dickies and Ramones concerts. Punches out people who say “virtual reality.” Drinks damn near anything, but favors Wild Turkey, Black Bush, and grain alcohol. Hangs out in neighborhood bars and tries to pick up MOTAS by drinking longshoremen under the table.

        Idiot:  Reads Time and Newsweek—and believes them. Drinks Jagermeister. Tries to pick up close blood relations—often succeeds, producing next generation of idiots.

1992 Presidential Election

        Technical thug:  Clinton, but only because he liked Gore's book.

        Administrative fascist:  Bush. Possibly Clinton, but only because he liked Tipper.

        Maniac:  Frank Zappa.

        Idiot:  Perot.

1996 Presidential Election

        Technical thug:  Richard Stallman — Larry Wall.

        Administrative fascist:  Nixon — Buchanan.

        Maniac:  Frank Zappa.

        Idiot:  Quayle.

Compound System Administrators

        Technical fascist:  Hacks kernel & writes a horde of scripts to prevent folk from ever using more than their fair share of system resources. Resulting overhead and load brings system to its knees.

        Technical maniac:  Writes scripts that seem to be monitoring the system, but are actually encrypting large lists of passwords. Uses nearby nodes as beta test sites for worms.

        Technical idiot:  Writes superuser-run scripts that sooner or later do rm -rf /.

        Fascistic maniac:  At first hint of cracker incursions, whether real or imagined, shuts down system by triggering water-on-the-brain detectors and Halon system.

        Fascistic idiot:

        # cp /dev/null /etc/passwd

        Maniacal idiot:  Napalms the CPU.

