% NITA style for B.Tech, M.Tech and Ph.D Thesis Project Report
% -- morphed from the stanford style with numerous localizations!


%----------------------------- identification ---------------------------------
\NeedsTeXFormat{LaTeX2e}
\ProvidesClass{nita}[2012/08/01 v1.0 NITA B.Tech , M. Tech, MCA , PhD  thesis report]
%----------------------------- initial code -----------------------------------

%--------------------------- declaration of options ---------------------------
\DeclareOption*{\PassOptionsToClass{\CurrentOption}{report}}
%--------------------------- execution of options -----------------------------
\ProcessOptions
%--------------------------- package loading ----------------------------------
\LoadClass[12pt,a4paper,twoside]{report}

%-------------------------------- main code -----------------------------------
\renewcommand{\bibname}{References}


\RequirePackage{amssymb}
%\RequirePackage{graphics}
%\RequirePackage{graphicx}
\RequirePackage{fancyhdr}
%\RequirePackage{eucal}
\RequirePackage[USenglish]{babel}
%\RequirePackage[usenames, dvipsnames]{color}
%\RequirePackage[perpage]{footmisc}
\RequirePackage[square, sort, numbers, authoryear]{natbib}
%\RequirePackage{ifthen}

\long\def\comment#1{}
\comment{
\usepackage[ pdftex,
            pdfpagelayout = None, %useoutlines,
            %bookmarks,
            %bookmarksopen = true,
            pdfstartview = FitH, %other options: Fit, FitB
            bookmarksnumbered = true,
            breaklinks = true,
            linktocpage,
            backref,
            colorlinks = true,
            linkcolor = blue,
            urlcolor  = blue,
            citecolor = blue,
            anchorcolor = blue,
            hyperindex = false,
            hyperfigures,
            a4paper,
            pdfpagemode = None,
            pdfauthor = {Anupamjamatia},
            pdftitle = {Sample \ for \ PG \ Thesis},
            ]{hyperref}
}


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Page layout
%--------------

% We need 1" margins except on the binding edge, where it is 1 1/2"
% Theses are single-sided, so we don't care about \evensidemargin
%\oddsidemargin 2.5cm \evensidemargin 3.8cm % + 1inch= 3cm
\oddsidemargin 0.46cm \evensidemargin 0.46cm % + 1inch= 3cm
\marginparwidth 40pt \marginparsep 10pt
\topmargin 0pt \headsep 30pt
\textheight 22.5cm \textwidth 16cm
%\footheight 0cm
%\headheight 0cm


% Disallow page breaks at hyphens (this will give some underfull vbox's,
% so an alternative is to use \brokenpenalty=100 and manually search
% for and fix such page breaks)
\brokenpenalty=10000




%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Use 1.3 times the normal baseline-to-baseline skip
\renewcommand{\baselinestretch}{1.3}

% Figures and tables are to be numbered sequentially throughout the
% thesis, rather than within chapters; for style consistency, do
% equations the same.  The following \def of \cl@chapter is a kludge:
% really there should be a \removefromreset, to stop figure numbers,
% etc., from being reset at chapter beginnings

\def\cl@chapter{\@elt{section}\@elt{footnote}}
\def\thefigure{\@arabic\c@figure}
\def\thetable{\@arabic\c@table}
\def\theequation{\arabic{equation}}

% Redefine the macro used for floats (including figures and tables)
% so that single spacing is used. (Note \def\figure{\@float{figure}set
% single spacing} doesn't work because figure has an optional
% argument)
\def\@xfloat#1[#2]{\ifhmode \@bsphack\@floatpenalty -\@Mii\else
   \@floatpenalty-\@Miii\fi\def\@captype{#1}\ifinner
\@parmoderr\@floatpenalty\z@
\else\@next\@currbox\@freelist{\@tempcnta\csname ftype@#1\endcsname
\multiply\@tempcnta\@xxxii\advance\@tempcnta\sixt@@n \@tfor \@tempa
:=#2\do {\if\@tempa h\advance\@tempcnta \@ne\fi \if\@tempa
t\advance\@tempcnta \tw@\fi \if\@tempa b\advance\@tempcnta
4\relax\fi \if\@tempa p\advance\@tempcnta 8\relax\fi
}\global\count\@currbox\@tempcnta}\@fltovf\fi
\global\setbox\@currbox\vbox\bgroup
\def\baselinestretch{1}\@normalsize \boxmaxdepth\z@
\hsize\columnwidth \@parboxrestore}

% Redefine the macro used for footnotes to use single spacing
\long\def\@footnotetext#1{\insert\footins{\def\baselinestretch{1}\footnotesize
    \interlinepenalty\interfootnotelinepenalty 
    \splittopskip\footnotesep
    \splitmaxdepth \dp\strutbox \floatingpenalty \@MM
    \hsize\columnwidth \@parboxrestore
   \edef\@currentlabel{\csname p@footnote\endcsname\@thefnmark}\@makefntext
    {\rule{\z@}{\footnotesep}\ignorespaces
      #1\strut}}}

% \author, \title are defined in report; here are the rest of the
% front matter defining macros


\def\dept#1{\gdef\@dept{#1}}
\def\supervisor#1{\gdef\@supervisor{#1}}
\def\hod#1{\gdef\@hod{#1}}
\def\externalexaminer#1{\gdef\@externalexaminer{#1}}
\def\degree#1{\mox{\gdef\@degree{#1}}}
\def\submitdate#1{\gdef\@submitdate{#1}}
\def\copyrightyear#1{\gdef\@copyrightyear{#1}} % \author, \title in report
\def\specialization#1{\mbox{\gdef\@specialization{#1}}}
\def\@maintitle{REPORT TITLE}
\def\@title{REPORT TITLE}
\def\@author{Abc(11UCS001)\\ Def(11UCS002)\\ Ghi(11UCS003)\\ Jkl(11UCS004)\\ Xyz(11UCS005)}
\def\@RegNo{11PCS008} % Like 11PCS001
\def\@dept{Computer Science and Engineering}
\def\@extdept{NIT Agartala}
\def\@supervisor{Mr. Swapan Debbarma}
\def\@extsupervisor{Dr. Paritosh Bhattacharya}
\def\@hod{Mr. Mrinal Kanti Deb Barma}
\def\@externalexaminer{Signature with Seal}
\def\@degree{Bachelor of Technology}
  \def\@specialization{Computer Science and Engineering}
\def\@college{~National Institute of Technology, Agartala}
\def\@extcollege{NIT Agartala} 

\def\@submitdate{\ifcase\the\month\or
  January\or February\or March\or April\or May\or June\or
  July\or August\or September\or October\or November\or December\fi
  \space \number\the\year}
  
\def\@submitdatewc{\ifcase\the\month\or
  January\or February\or March\or APRIL\or MAY\or JUNE\or
  July\or August\or September\or October\or November\or December\fi,
  \space \number\the\year}
%\ifnum\month=12
%    \@tempcnta=\year \advance\@tempcnta by 1
%    \edef\@copyrightyear{\number\the\@tempcnta}
%\else
    \def\@copyrightyear{\number\the\year}
%\fi
%
\newif\ifcopyright \newif\iffigurespage \newif\iftablespage
\copyrightfalse

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
\def\coverp{%
    \thispagestyle{empty}%
    \renewcommand{\baselinestretch}{1}
    \null%
    \begin{center}
        \textbf{{\LARGE \uppercase \expandafter{\@maintitle}}}
    \end{center}
  \vskip 3cm 
  
  \begin{center}
    \begin{figure} [htb]
    \begin{center}
    \includegraphics[scale=0.25]{logo.png}
    \end{center}
    \end{figure}
  \end{center}
  \vskip 6cm   
    \begin{center}
%        \sl by\\
        %by\\
        \textbf{\textit{\@author}}\\
    	%\@RegNo
    \end{center}
    
    \begin{center}
%        {\sl to the}\\
        
        {\bf \expandafter{COMPUTER SCIENCE \& ENGINEERING DEPARTMENT}}\\
        { \bf {NATIONAL INSTITUTE OF TECHNOLOGY,AGARTALA\\INDIA-799046}}\\
        \bf {\@submitdatewc}
    \end{center}

    \vskip 1cm
\newpage}
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
\def\titlep{%
    \thispagestyle{empty}%
    \renewcommand{\baselinestretch}{1}
    \null%
    \begin{center}
        \textbf{{\LARGE \uppercase \expandafter{\@maintitle}}}
    \end{center}
  \vskip .5cm
  
    \begin{center}
%        {\sl A Thesis Submitted}\\
        \textbf {\textit{Report submitted to\\
        \@college\\        
        for the award of the degree\\
        of\\
        \large \@degree}}\\
        
    \end{center}
    \begin{center}
%        \sl by\\
        \textbf {\textit{by\\
         \large {\@author}}}%\\Enrolment No:\@RegNo}}}
    \end{center}
    \vskip .4cm 


\begin{center}
%        \sl by\\
       \textbf{ \textit{Under the Guidance of\\
       \vskip .5cm
        ***************\\
	************ Professor, CSE Department, NIT Agartala, India}}
	%\&\\
	%Dr. xyz\\
	%Professor, School of Computation, Central University}}
	
	%Associate Professor, CSE Department
    
    \end{center}
    \vskip 0.2cm 

\begin{figure} [htb]

    \begin{center}

    \includegraphics[scale=0.20]{logo.png}

    \end{center}

\end{figure}
    \begin{center}
%        {\sl to the}\\
        
        {\bf \expandafter \large \uppercase {{Computer Science \& Engineering Department}}}\\
        {\bf \large \uppercase {National Institute of Technology Agartala}}\\
        \bf \large {\@submitdatewc}
       
    \end{center}
    \vskip 0.05cm
    
    \begin{center}
%        {\sl to the}\\
        
        %\copyright 2013 \@author. All rights reserved
        
    \end{center}

    \vskip 0.5cm
    
\newpage}

\def\copyrightpage{%
    \null\vfill
    \begin{center}
        \Large\copyright\ Copyright \@copyrightyear\\
        by\\
        \@author\\
    \end{center}
    \vfill\newpage}

    
\def\undertakingpage{\newpage%
    \renewcommand{\baselinestretch}{1.3}
    \vspace*{\fill}
    \centerline{\LARGE\bf UNDERTAKING}
    \vspace{3cm}
    \begin{center}
    \begin{minipage}{5.5in}
    \parindent=0pt
    I declare that the work presented in this thesis proposal titled
    ``{\sl\@title}'', submitted to the \mbox{\@dept} Department,\@college, for 
    the award of the {\bf\emph \@degree} degree in \mbox{\bf\emph \@specialization}, 
    is my original work. I have not plagiarized or submitted the same work for 
    the award of any other degree. In case this undertaking is found incorrect, I accept 
    that my degree may be unconditionally withdrawn.\par
    \vspace*{2cm}
    \@submitdatewc\\Agartala\par
    \hbox to 4.5in {
    \hfill\vbox{\hsize 2in\vrule width 2in height0.4pt\vspace*{-4mm}\par\center{\@author}}}


    \vspace*{5cm}
    \end{minipage}
    \end{center}
}


%%%%%%%%%%%%%%%%%%Declaration Page%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


    
\def\declaration{\newpage%
    \renewcommand{\baselinestretch}{1.3}
%    \vspace*{\fill}
    \centerline{\LARGE\bf DECLARATION}
    \vspace{2cm}
    \begin{center}
    \begin{minipage}{5.5in}
    \parindent=0pt
    
    We declare that the work presented in this report proposal titled
    ``{\sl\@title}'', submitted to the \mbox{\@dept} Department,\@college, for 
    the award of the {\bf\emph \@degree} degree in \mbox{\bf\emph \@specialization},
    represents our ideas in our own words and where others' ideas or
    words have been included, we have adequately cited and referenced the original sources. We also declare that we have adhered
    to all principles of academic honesty and integrity and have not misrepresented or fabricated or falsified any 
    idea/data/fact/source in our submission. We understand that any violation of the above will be cause for 
    disciplinary action by the Institute and can also evoke penal action from the sources which have thus 
    not been properly cited or from whom proper permission has not been taken when needed.\par
    \vspace*{2cm}
    \@submitdatewc\\Agartala\par
%    \hbox to 5.5in {
%    \hfill\vbox{\hsize 2in\vrule width 2in
%    height0.4pt\vspace*{-4mm}\par\center{Candidates name}}}
      


\vspace*{1cm}
\hbox to 0.1in {
    \hfill\vbox{\hsize 2in\vrule width 2in height0.4pt\vspace*{-4mm}\par\center{Candidate's Name}}}
   
\vspace*{-8mm}
\hbox to 5.5in {
    \hfill\vbox{\hsize 2in\vrule width 2in height0.4pt\vspace*{-4mm}\par\center{Candidate's Name}}}

     
\vspace*{1cm}
\hbox to 0.1in {
    \hfill\vbox{\hsize 2in\vrule width 2in height0.4pt\vspace*{-4mm}\par\center{Candidate's Name}}}
   
\vspace*{-8mm}
\hbox to 5.5in {
    \hfill\vbox{\hsize 2in\vrule width 2in height0.4pt\vspace*{-4mm}\par\center{Candidate's Name}}}    

    \vspace*{5cm}
    \end{minipage}
    \end{center}
}

%55555555555555555555555555555
\long\def\approvalsheetpreabmle{%
\parindent=0pt
 This report entitled ``{\sl\@title}'', by {Abc(11UCS001), Def(11UCS002), Ghi(11UCS003),  Jkl(11UCS004), Xyz(11UCS005)},  is approved for the award of \mbox{\bf\emph \@degree} in \mbox{\bf\emph \@specialization}.\par
\vspace{3cm}}

\long\def\signature#1{%
\parbox{0.47\textwidth}{\hrulefill\par#1}
}

\def\approvalsheet{%
    \renewcommand{\baselinestretch}{1.3}

%\vspace*{\fill}
    \centerline{\LARGE\bf REPORT APPROVAL FOR B.TECH}
    \vspace{2cm}

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%\signaturepreabmle
\approvalsheetpreabmle
    \signature{
        \centerline{\small **********************}\par
	\centerline{\small (Project Supervisor)}\par
        \centerline{\small ********** Professor}\par
        \centerline{\small{\@dept \ Department}}\par
        \centerline{\small NIT, Agartala}}\hfill
    %\signature{
	%\centerline{\small Mr. Rajib Chowdhuri}\par
	%\centerline{\small (Project Coordinator)}\par
    %    \centerline{\small Assistant Professor}\par
    %    \centerline{\small \@dept \ Department}\par
    %    \centerline{\small NIT Agartala}\par 
    %    %\centerline{Central University}
    %    }\par
   %\vspace{3cm}
   %\begin{center}
%    \signature{
%        \centerline{\small External Examiner}\par
%        \centerline{}\par
%         \centerline{ }\par
%       \centerline{}\par
%       \centerline{}\par
        %\@dept \ Dept.\par
       % abcd University	  
%        }\hfill
        \signature{
	\centerline{\small ***********************}\par
	\centerline{\small (Head~of~the~Department)}\par
	%\centerline{DPPC}\par
	\centerline{\small ********* Professor}\par
         \centerline{\small \@dept \ Department}\par
       \centerline{\small NIT Agartala}\par
        %\@dept \ Dept.\par
        % abcd University
	}\hfill
	%\end{center}
\vspace{2cm}
    \mbox{
        \leftline{Date:\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_}
        }
    \mbox{    
        \leftline{Place:NIT, Agartala}
        }\hfill
    
    \vspace*{\fill}
    \vfill\newpage
}


%55555555555555555555555555555
%\long\def\signaturepreabmle{%
%\parindent=0pt
%This dissertation entitled
%``{\sl\@title}'', by {\sl\@author}, Enrolment Number {\sl\@RegNo} is approved for the award of \mbox{\bf\emph \@degree} in \mbox{\bf\emph \@specialization}.
%\par
%\vspace{3cm}}

%\long\def\signature#1{%
%\parbox{0.47\textwidth}{\hrulefill\par#1}
%}


%55555555555555555555555555555
\long\def\signaturepreabmle{%
\parindent=0pt
It is certified that the work contained in the report titled
``{\sl\@title}'', by {Abc(11UCS001), Def(11UCS002), Ghi(11UCS003), Jkl(11UCS004), Xyz(11UCS005)},  has been carried out under 
 my supervision and this work has not been submitted  elsewhere for a degree.
\par
\vspace{3cm}}

\long\def\signature#1{%
\parbox{0.47\textwidth}{\hrulefill\par#1}
}

\def\signaturepage{%
    \renewcommand{\baselinestretch}{1.3}

%\vspace*{\fill}
    \centerline{\LARGE\bf CERTIFICATE}
    \vspace{2cm}

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
\signaturepreabmle
   
    \signature{
       
       \centerline{*****************}\par
	\centerline{(Project Supervisor)}\par
        \centerline{********** Professor}\par
        \centerline{\@dept \ Department}\par
        \centerline{NIT Agartala}}\hfill
         \signature{
	\centerline{********************}\par
	\centerline{(Head of the Department)}\par
        \centerline{********** Professor}\par
        \centerline{\@dept \ Department}\par
%        \centerline{\@extdept}\par
        \centerline{NIT Agartala}
        }\par
   %\vspace{4cm}
    %\null\hfill
    %\signature{
	%\centerline{\@hod}\par
	%\centerline{Head of the Department}\par
	%\centerline{Associate Professor}\par
         %\centerline{\@dept \ Department}\par
       %\centerline{NIT, Agartala}\par
        %\@dept \ Dept.\par
        % abcd University
	%}\hfill
    \vspace*{\fill}
}
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


%5555555555555555555555555555

\def\beforepreface{
    \pagenumbering{roman}
    \pagestyle{plain}
    \coverp
    %\clearpage\mbox{}\clearpage
    \titlep
    \ifcopyright\copyrightpage\fi
    %\prefacesection{Dedicated To}
    \renewcommand{\baselinestretch}{1.3}
    \centerline{\LARGE\bf Dedicated To}
    \vspace{2cm}
    \begin{center}
    \begin{minipage}{5.5in}
    \parindent=0pt
    
    To our Project Supervisor Mr. Swapan Debbarma, Assistant Professor, CSED, NIT Agartala for sharing his valuable knowledge, encouragement and showing confidence 
on us all the time. Each of the faculties of the department to contribute in our development as a professional and help us to achieve this goal.

To all those people who have somehow contributed to the creation of this project and who have supported us.
\end{minipage}
\end{center}

\newpage
\vspace*{6cm}
\textit{\textbf { \begin{large} \ding{125}You can't teach people everything they need to know. 
The best you can do is position them where they can find what they need 
to know when they need to know it.\ding{126}\end{large}}}\\
\vspace*{4cm} \hspace*{6.5cm} \textbf{-Seymour Papert (MIT Mathematician)}
    \newpage
    \approvalsheet
    \declaration
    \newpage
    \signaturepage
    }

\def\prefacesection#1{%
    \chapter*{#1}
    \addcontentsline{toc}{chapter}{#1}}


% The \addvspace business below is to avoid the extra space that gets put
% in the tables of figures and tables between chapters (it makes no sense
% now that the numbering is continuous)
\def\afterpreface{\newpage
    \tableofcontents
    \newpage
    \iftablespage
        {\addvspace{10pt}
        \let\saveaddvspace=\addvspace
        \def\addvspace##1{}

        \listoftables
        \let\addvspace=\saveaddvspace}
        \newpage
    \fi
    \iffigurespage
        {\addvspace{10pt}
        \let\saveaddvspace=\addvspace
        \def\addvspace##1{}

        \listoffigures
        \let\addvspace=\saveaddvspace}
        \newpage
    \fi
    \pagenumbering{arabic}
    \pagestyle{plain}
}

\setcounter{secnumdepth}{3}

\def\subsubsection{\@startsection{subsubsection}{3}{\z@}{-3.25ex plus  -1ex minus -.2ex}{1.5ex plus .2ex}{\large\sl}}
\def\thesubsubsection{\hbox{\vrule height 1ex width .75ex depth .3ex}}

%
%
% Some Theorem Environments
%
%


\newtheorem{condition}{Condition}
\newtheorem{proposition}{Proposition}[chapter]
\newtheorem{theorem}{Theorem}[chapter]
\newtheorem{defn}{Definition}[chapter]
\newtheorem{conjecture}{Conjecture}[chapter]
\newtheorem{lemma}[theorem]{Lemma}
\newtheorem{corollary}[theorem]{Corollary}
\newtheorem{problem}{Problem}[chapter]
\newtheorem{subproblem}{Subproblem}[chapter]


\newenvironment{definition}{\begin{defn}\em}{\end{defn}}
\newenvironment{proof}{\noindent{\bf Proof:}\hspace  {5mm}}{
\nopagebreak\nobreak\quad\nopagebreak\nobreak\proofbox\medskip}
\newenvironment{example}{\noindent{\bf Example}\quad}{
\nopagebreak\nobreak\quad\nobreak\nopagebreak\proofbox\smallskip}

\newcounter{case}
\newenvironment{case}{\begin{list}{\bf Case \arabic{case}:}%
{\usecounter{case}%
\labelwidth 5em
\leftmargin 5em
\setlength\listparindent{\parindent}
\makelabel}
\def\case{\item }}{\end{list}\nobreak\nopagebreak\quad\nopagebreak\nobreak\proofbox\bigskip}
\def\proofbox{\hbox{\vrule height1.2ex depth.3ex width0.8ex}}


% Get References instead of Bibliography
\def\thebibliography#1{\chapter*{References\@mkboth
% {BIBLIOGRAPHY}{BIBLIOGRAPHY}}
 {References}{References}}
 \addcontentsline{toc}{chapter}{References}%\bf
 \list
 {[\arabic{enumi}]}{\settowidth\labelwidth{[#1]}\leftmargin\labelwidth
 \advance\leftmargin\labelsep
 \usecounter{enumi}}
 \def\newblock{\hskip .11em plus .33em minus .07em}
 \sloppy\clubpenalty4000\widowpenalty4000
 \sfcode`\.=1000\relax}
\let\endthebibliography=\endlist


\RequirePackage{setspace}
\onehalfspacing
%\doublespacing
\setlength{\parskip}{12pt}

\renewcommand*\arraystretch{1.5}
%\RequirePackage{fancyhdr}
%\pagestyle{fancy}

\RequirePackage[hang,small]{caption}
\RequirePackage{multirow}
\RequirePackage{enumerate}

\renewcommand{\@makechapterhead}[1]{%
\vspace*{50\p@}%
{\parindent \z@ \raggedright \normalfont
\ifnum \c@secnumdepth >\m@ne
\huge \@chapapp\space \thechapter % Chapter number
\par\nobreak
\vspace{-30pt}
\fi
\interlinepenalty\@M
\Huge \bf #1\par % chapter title
\nobreak
\vskip 20\p@
}}

\renewcommand{\@makeschapterhead}[1]{%
\vspace*{50\p@}%
{\parindent \z@ \raggedright
\normalfont
\interlinepenalty\@M
\Huge \bf #1\par % chapter title
\nobreak
\vskip 40\p@
}}

\endinput



% --> Remove dots in TOC [24/10/2001] Thanks to the tocloft documentation! [10/11/2001]
% \renewcommand{\@dotsep}{10000}

