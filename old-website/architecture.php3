<?php $TITLE = 'Gnucash - Architecture'; ?>

<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT>

      <?php include("include/table_top.inc"); ?>
        architecture overview
      <?php include("include/table_middle.inc"); ?>
        
<p>GnuCash currently consists of the following modules.

<h2>The Engine</h2>

<p>The <dfn>Engine</dfn> (located under the src/engine directory in the GnuCash
codebase) provides an interface for creating, manipulating, and
destroying three basic financial entities: Accounts, Transactions (known
as Journal Entries in accounting practice), and Splits (known as Ledger
Entries). These three entities are the central data structures of the
GnuCash financial data model.

<p>The Engine code contains no GUI code whatsoever, and is essentially
OS-neutral.

<h2>The Register</h2>

<p>The <dfn>Register</dfn> (located under src/register) implements a ledger-like
GUI that allows the user to dynamically enter dates, prices, memos
descriptions, etc. in an intuitive fashion that should be obvious to
anyone who's used a checkbook register. The code is highly configurable,
allowing the ledger columns and rows to be laid out in any way, with no
restrictions on the function, type, and number of columns/rows. For
example, one can define a ledger with three date fields, one price
field, and four memo fields in a straightforward fashion. Cell handling
objects support and automatically validate date entry, memo entry
(w/auto-completion), prices, combo-boxes (pull-down menus), and
multi-state check-boxes. Cells can be marked read-write, or output-only. 
Cells can be assigned unique colors. The currently active ledger
row-block can be highlighted with a unique color.

<p>The register code is completely independent of the engine code, knows
nothing about accounting or any of the other GnuCash subsystems. It
can be used in independent projects that have nothing to do with
accounting.

<h2>Reports</h2>

<p>The <dfn>Reports</dfn> module (src/reports) is a scheme (guile) based system
to create balance sheets, profit &amp; loss statements, etc. by using the
engine API's to fetch and display data.

<h2>Quotes</h2>

<p>The <dfn>Quotes</dfn> module (src/quotes) is a perl system to fetch stock
price data off the Internet and insert it into the GnuCash Engine. This
is now a separate project called Finance::Quote available at
SourceForge.

<h2>Options</h2>

<p>The <dfn>Options</dfn> module (src/scm/options.scm) provides an
infrastructure for defining both user-configurable and internal options
or 'preferences'. User-configurable options are 'implemented' by
providing a GUI which allows the user to see and change option values.

<h2>GnuCash</h2>

<p>The GnuCash module (src/gnome, src/register/gnome and src/*.[ch]) is the
main GUI application. It consists of a collection of miscellaneous GUI
code to glue together all of the pieces above into a coherent,
point-and-click whole. It is meant to be easy to use and intuitive to
the novice user without sacrificing the power and flexibility that a
professional might expect. When people say that GnuCash is trying to be
a "Quicken or MSMoney look/work/act-alike", this is the piece that they
are referring to. It really is meant to be a personal-finance manager
with enough power for the power user and the ease of use for the
beginner.

<p>Currently, the Gnome interface is the only operational interface. There
is an obsolete Motif interface which is not maintained. The Qt code
won't compile, and most/all functions are missing.

        <?php include("include/table_bottom.inc"); ?>
      
        <! END CONTENT>
      

<?php include("include/footer.inc"); ?> 
