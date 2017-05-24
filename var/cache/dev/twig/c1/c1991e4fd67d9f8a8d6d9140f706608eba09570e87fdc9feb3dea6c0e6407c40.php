<?php

/* @ESFEspaceAbonne/Default/mutuelle.html.twig */
class __TwigTemplate_4c79af425c8946736c8b0a631551b1b14c658655ea6bbf398a35fada01c7be41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/mutuelle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0733975b3ceeb1e343cdecb3a0849e5e4d2fe68ff3bd7ca3cbc8bb8f4e2040df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0733975b3ceeb1e343cdecb3a0849e5e4d2fe68ff3bd7ca3cbc8bb8f4e2040df->enter($__internal_0733975b3ceeb1e343cdecb3a0849e5e4d2fe68ff3bd7ca3cbc8bb8f4e2040df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mutuelle.html.twig"));

        $__internal_6a34f28b33866581cecc33e18216b2aa1713d4fe2a9551aa3313ccb4858d724b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a34f28b33866581cecc33e18216b2aa1713d4fe2a9551aa3313ccb4858d724b->enter($__internal_6a34f28b33866581cecc33e18216b2aa1713d4fe2a9551aa3313ccb4858d724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0733975b3ceeb1e343cdecb3a0849e5e4d2fe68ff3bd7ca3cbc8bb8f4e2040df->leave($__internal_0733975b3ceeb1e343cdecb3a0849e5e4d2fe68ff3bd7ca3cbc8bb8f4e2040df_prof);

        
        $__internal_6a34f28b33866581cecc33e18216b2aa1713d4fe2a9551aa3313ccb4858d724b->leave($__internal_6a34f28b33866581cecc33e18216b2aa1713d4fe2a9551aa3313ccb4858d724b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c2fffcda4646f1c7ec6e22fa2c3e5874c87b1b227634faccab6991096efa706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2fffcda4646f1c7ec6e22fa2c3e5874c87b1b227634faccab6991096efa706->enter($__internal_8c2fffcda4646f1c7ec6e22fa2c3e5874c87b1b227634faccab6991096efa706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04e34a2fbb5613a58e6c3d4034592abddfd9388e0cdd56c5e61e6fe77e2bbfd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e34a2fbb5613a58e6c3d4034592abddfd9388e0cdd56c5e61e6fe77e2bbfd5->enter($__internal_04e34a2fbb5613a58e6c3d4034592abddfd9388e0cdd56c5e61e6fe77e2bbfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_04e34a2fbb5613a58e6c3d4034592abddfd9388e0cdd56c5e61e6fe77e2bbfd5->leave($__internal_04e34a2fbb5613a58e6c3d4034592abddfd9388e0cdd56c5e61e6fe77e2bbfd5_prof);

        
        $__internal_8c2fffcda4646f1c7ec6e22fa2c3e5874c87b1b227634faccab6991096efa706->leave($__internal_8c2fffcda4646f1c7ec6e22fa2c3e5874c87b1b227634faccab6991096efa706_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b6f4463b874a6b44cfe94cf6291bdeed022d378462e3a031d3b423313052f970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f4463b874a6b44cfe94cf6291bdeed022d378462e3a031d3b423313052f970->enter($__internal_b6f4463b874a6b44cfe94cf6291bdeed022d378462e3a031d3b423313052f970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ae783767f686309dca868bf1ca01d4573c6ef810a09c3413f83e167d6a1e44e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae783767f686309dca868bf1ca01d4573c6ef810a09c3413f83e167d6a1e44e6->enter($__internal_ae783767f686309dca868bf1ca01d4573c6ef810a09c3413f83e167d6a1e44e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_ae783767f686309dca868bf1ca01d4573c6ef810a09c3413f83e167d6a1e44e6->leave($__internal_ae783767f686309dca868bf1ca01d4573c6ef810a09c3413f83e167d6a1e44e6_prof);

        
        $__internal_b6f4463b874a6b44cfe94cf6291bdeed022d378462e3a031d3b423313052f970->leave($__internal_b6f4463b874a6b44cfe94cf6291bdeed022d378462e3a031d3b423313052f970_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_e35cacd512c5472269e65df82888099f640ccd2aa28db42c1d4219d957a15f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35cacd512c5472269e65df82888099f640ccd2aa28db42c1d4219d957a15f28->enter($__internal_e35cacd512c5472269e65df82888099f640ccd2aa28db42c1d4219d957a15f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_f8e4d38eb064666df05ddd397cd3b632c240e586f68e560a0fd5f0ca802670c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e4d38eb064666df05ddd397cd3b632c240e586f68e560a0fd5f0ca802670c7->enter($__internal_f8e4d38eb064666df05ddd397cd3b632c240e586f68e560a0fd5f0ca802670c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h4>Inscription à la mutuelle étudiante AVA</h4>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div align=\"center\">
\t\t\t\t\t<a class=\"btn btn-info\" href=\"https://www.ava.fr/blog/produit/plan-sante-studies/\" role=\"button\" target=\"_blank\">Cliquez Ici</a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_f8e4d38eb064666df05ddd397cd3b632c240e586f68e560a0fd5f0ca802670c7->leave($__internal_f8e4d38eb064666df05ddd397cd3b632c240e586f68e560a0fd5f0ca802670c7_prof);

        
        $__internal_e35cacd512c5472269e65df82888099f640ccd2aa28db42c1d4219d957a15f28->leave($__internal_e35cacd512c5472269e65df82888099f640ccd2aa28db42c1d4219d957a15f28_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/mutuelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
\tInscription Université - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
{% endblock %}

{% block Content %} 
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h4>Inscription à la mutuelle étudiante AVA</h4>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div align=\"center\">
\t\t\t\t\t<a class=\"btn btn-info\" href=\"https://www.ava.fr/blog/produit/plan-sante-studies/\" role=\"button\" target=\"_blank\">Cliquez Ici</a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}", "@ESFEspaceAbonne/Default/mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\mutuelle.html.twig");
    }
}
