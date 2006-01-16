<?php $TITLE = 'Gnucash - Contribute'; ?>


<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT>
      
      
      <?php include("include/table_top.inc"); ?>
        how to contribute to gnucash
      <?php include("include/table_middle.inc"); ?>      
        
<! ************************** >                        
<! Developer Content - START  >
<! ************************** >    

<BR><BR><font size="4"><b>Contributing to GnuCash</b></font>
<HR>

<FONT SIZE="2" FACE="VERANDA,HELVETICA">
<b>
I want to contribute to GnuCash, how can I do that?
</b>
<p>
GnuCash is an Free Software development project and the 
dynamics of contributing to it is much like any other.
What you contribute to it depends very much on your skill, 
the time you have available, and what you enjoy doing.
GnuCash is looking for beta-testers, programmers, writers, 
question-answerers, translators and all-around nice people.   
Here's how you might fit in:

<p>
<dl>
<dt><b>If you are a programmer:</b>
<dd>Get on the <a href="maillist.php3">gnucash-devel</a>
    mailing list.  Set up cvs on your machine, and check 
    out the <a href="source_code.php3">source code</a>.
    Take a look at the build readme's in the doc subdirectory
    and get hacking.  On the other hand, depending on your 
    temperment, you'll probably want to discuss your hacks
    on the mailing list: this will avoid devolution and 
    other unpleasentries of finding out that not everyone 
    thinks your patch is the greatest.  To get a better
    idea of what's going on, study the 
    <a href="architecture.php3">architectural overview</a>.
    To get an idea of what's in store, and who's doing what,
    lokk over the 
    <a href="http://www.linas.org/linux/gnucash/projects.html">
    projects list</a>.  Its long, but it should help orient
    and give an idea of the status of various components.
    Last, but hardly least, you should go over the existing 
    documentation in the subdirectory <tt>src/doc</tt> in
    the source tree.
    <p></p>
<dt><b>If you are a translator:</b>
<dd>All of the menus and dialogues in GnuCash are fully 
    internationalized/localized using the GNU gettext tools.
    Chances are good that you've already configured your 
    machine correctly for your locale, and therefore, chances
    are reasonable that you're already seeing GnuCash in your
    native language, with correctly localized dates and 
    currencies.  If not, either there's a bug, your machine
    is misconfigured, or your native language is not 
    Danish, English, French, German, Italian, Japanese, 
    Russian or Sweedish.  
    <p>
    This does not mean that the translation is perfect: if 
    the wrong phrase or word is used in menus or dialogues, 
    you should contact the maintainer for your language
    (see the README file for credits).  If the wrong currency
    is displayed, or there are other localization problems, 
    you should contact the 
    <a href="maillist.php3">gnucash-devel</a> mailing list.
    Note that the input methods for asian (Japanese, Chinese, 
    etc.) and right-to-left languages are partially broken:
    we are looking for programmers who are knowledgable enough 
    to fix in input method problems in the gnome input widgets 
    that we use.  Also: I'd personally like an 'asian-howto'
    written in english so that I (actually, we, the 
    english-speaking developers) could set up our boxes here 
    for a demo.  Write <a href="linas@linas.org>linas at linas.org</a>
    if you can help me set up my machine for Japanese or Chinese.
    </p>
    <p>
    Preparing new translations is relatively easy: 
    check out the <a href="source_code.php3">source code</a>,
    review the file <tt>README.translator.txt</tt>, and then
    look at the translation file in the <tt>po</tt> directory.
    </p>
    <p>
    We also need non-english translations of the website.
    If you've got one of these, write
    <a href="mailto:webmaster@gnucash.org">webmaster at gnucash.org</a>.
    Non-english translations of the documentation are also needed.
    The sticky part is, of course, that the documentation is quite
    rough, and is currently being re-written.  If you are a 
    great writer, contact us.
    </p>
</dl>

</FONT>


<! ************************** >                        
<! Developer Content - FINISH >
<! ************************** >    
		
      <?php include("include/table_bottom.inc"); ?>
      
      <! END CONTENT>
      

<?php include("include/footer.inc"); ?> 
