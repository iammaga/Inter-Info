@extends('layouts.lang')

@section('title-block')
HTML
@endsection

@section('contents')
    <img src="{{url('/images/html.png')}}" width="100%" height="500px"/>
    <h3>What is HTML?</h3>
    
    <ul>
        <li>HTML stands for Hyper Text Markup Language</li>
        <li>HTML is the standard markup language for creating Web pages</li>
        <li>HTML describes the structure of a Web page</li>
        <li>HTML consists of a series of elements</li>
        <li>HTML elements tell the browser how to display the content</li>
        <li>HTML elements label pieces of content such as "this is a heading", "this 
        is a paragraph", "this is a link", etc.</li>
    </ul>

    <h3>A Simple HTML Document</h3>

    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>title<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Page Title<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/title<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>

    <h3>Example Explained</h3>

    <ul>
        <li>The <code class="w3-codespan">&lt;!DOCTYPE html&gt;</code> declaration defines 
        that this document is an HTML5 document</li>
        <li>The <code class="w3-codespan">&lt;html&gt;</code> element is the root element of an HTML 
        page</li>
         <li>The <code class="w3-codespan">&lt;head&gt;</code> element contains meta information about the 
         HTML page</li>
         <li>The <code class="w3-codespan">&lt;title&gt;</code> element specifies a title for the 
         HTML page (which is shown in the browser's title bar or in the page's tab)</li>
         <li>The <code class="w3-codespan">&lt;body&gt;</code> element defines the 
         document's body, and is a container for all the visible contents, such as 
         headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
         <li>The <code class="w3-codespan">&lt;h1&gt;</code> element defines a large heading</li>
         <li>The <code class="w3-codespan">&lt;p&gt;</code> element defines a paragraph</li>
    </ul>

    <hr>

    <p>An HTML element is defined by a start tag, some content, and an end tag:</p>

    <div style="font-size:20px;padding:10px;margin-bottom:10px;">
        <span class="spes_tagname">
        <span class="spes_tag">&lt;</span>tagname<span class="spes_tag">&gt;</span></span>
        Content goes here...
        <span class="spes_tagname">
        <span class="spes_tag">&lt;</span>/tagname<span class="spes_tag">&gt;</span></span>
    </div>

    <p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>

    <div style="font-size:20px;padding:10px;margin-bottom:10px;">
        <span class="spes_tagname"><span class="spes_tag">&lt;<span class="spes_tagname">h1</span>&gt;</span></span>My 
          First Heading<span class="spes_tagname"><span class="spes_tag">&lt;</span>/h1<span class="spes_tag">&gt;</span></span>
    </div>

    <div style="font-size:20px;padding:10px;margin-bottom:10px;">
        <span class="spes_tagname"><span class="spes_tag">&lt;</span>p<span class="spes_tag">&gt;</span></span>My first paragraph.<span class="spes_tagname"><span class="spes_tag">&lt;</span>/p<span class="spes_tag">&gt;</span></span>
    </div>

    <table class="ws-table-all notranslate">
        <tbody><tr>
        <th>Start tag</th>
        <th>Element content</th>
        <th>End tag</th>
        </tr>
        <tr>
        <td>&lt;h1&gt;</td>
        <td>My First Heading</td>
        <td>&lt;/h1&gt;</td>
        </tr>
        <tr>
        <td>&lt;p&gt;</td>
        <td>My first paragraph.</td>
        <td>&lt;/p&gt;</td>
        </tr>
        <tr>
        <td>&lt;br&gt;</td>
        <td><em>none</em></td>
        <td><em>none</em></td>
        </tr>
        </tbody>
    </table>

    <div class="w3-panel w3-note">
        <p><strong>Note:</strong> Some HTML elements have no content (like the &lt;br&gt; 
        element). These elements are called empty elements. Empty elements do not have an end tag!</p>
    </div>

@endsection