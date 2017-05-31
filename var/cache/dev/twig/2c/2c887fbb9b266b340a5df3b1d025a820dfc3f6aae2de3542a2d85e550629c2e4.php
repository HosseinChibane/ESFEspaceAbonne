<?php

/* ESFEspaceAbonneBundle:back:mutuelle.html.twig */
class __TwigTemplate_4faf9fbf9c6dbea7d2f583226d639e30f4dd79e949b9564163c81ce40f0f11d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mutuelle.html.twig", 1);
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
        $__internal_cdedb9f5267064f923a8fac4751d3471f07a6de9b60349fc778dbecf91d85a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdedb9f5267064f923a8fac4751d3471f07a6de9b60349fc778dbecf91d85a67->enter($__internal_cdedb9f5267064f923a8fac4751d3471f07a6de9b60349fc778dbecf91d85a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $__internal_0fdfb2aea1c3374fe0a6ea38e6de96c4e4219eaf454e9f3ac962daaa9ee9d728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdfb2aea1c3374fe0a6ea38e6de96c4e4219eaf454e9f3ac962daaa9ee9d728->enter($__internal_0fdfb2aea1c3374fe0a6ea38e6de96c4e4219eaf454e9f3ac962daaa9ee9d728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdedb9f5267064f923a8fac4751d3471f07a6de9b60349fc778dbecf91d85a67->leave($__internal_cdedb9f5267064f923a8fac4751d3471f07a6de9b60349fc778dbecf91d85a67_prof);

        
        $__internal_0fdfb2aea1c3374fe0a6ea38e6de96c4e4219eaf454e9f3ac962daaa9ee9d728->leave($__internal_0fdfb2aea1c3374fe0a6ea38e6de96c4e4219eaf454e9f3ac962daaa9ee9d728_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8acc2a0c235d4e99e2667fb84298800fbb51f885c6e14b15f34affa965af30a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8acc2a0c235d4e99e2667fb84298800fbb51f885c6e14b15f34affa965af30a->enter($__internal_d8acc2a0c235d4e99e2667fb84298800fbb51f885c6e14b15f34affa965af30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_770ed8415aaa115ae139d432a968409a6b376c97986b822109f785f987a63a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770ed8415aaa115ae139d432a968409a6b376c97986b822109f785f987a63a99->enter($__internal_770ed8415aaa115ae139d432a968409a6b376c97986b822109f785f987a63a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_770ed8415aaa115ae139d432a968409a6b376c97986b822109f785f987a63a99->leave($__internal_770ed8415aaa115ae139d432a968409a6b376c97986b822109f785f987a63a99_prof);

        
        $__internal_d8acc2a0c235d4e99e2667fb84298800fbb51f885c6e14b15f34affa965af30a->leave($__internal_d8acc2a0c235d4e99e2667fb84298800fbb51f885c6e14b15f34affa965af30a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6ea923e0f79444817ede71f6ae4b5d61423247e6930ac6640446e974e5dd452f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea923e0f79444817ede71f6ae4b5d61423247e6930ac6640446e974e5dd452f->enter($__internal_6ea923e0f79444817ede71f6ae4b5d61423247e6930ac6640446e974e5dd452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_16ecfc3b1797e530d4d212f6b42653f2c650d2a964b87dae261397f1479cbdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ecfc3b1797e530d4d212f6b42653f2c650d2a964b87dae261397f1479cbdaf->enter($__internal_16ecfc3b1797e530d4d212f6b42653f2c650d2a964b87dae261397f1479cbdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_16ecfc3b1797e530d4d212f6b42653f2c650d2a964b87dae261397f1479cbdaf->leave($__internal_16ecfc3b1797e530d4d212f6b42653f2c650d2a964b87dae261397f1479cbdaf_prof);

        
        $__internal_6ea923e0f79444817ede71f6ae4b5d61423247e6930ac6640446e974e5dd452f->leave($__internal_6ea923e0f79444817ede71f6ae4b5d61423247e6930ac6640446e974e5dd452f_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_97a2fc1e6d35d893fa9778d4ae2413d2a15bd7256e76ca8b0afe923183d12e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a2fc1e6d35d893fa9778d4ae2413d2a15bd7256e76ca8b0afe923183d12e8e->enter($__internal_97a2fc1e6d35d893fa9778d4ae2413d2a15bd7256e76ca8b0afe923183d12e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_4c3458d7c093916d7051c71bccad95665759544f7b58f96ab71dc0fe13f3b090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3458d7c093916d7051c71bccad95665759544f7b58f96ab71dc0fe13f3b090->enter($__internal_4c3458d7c093916d7051c71bccad95665759544f7b58f96ab71dc0fe13f3b090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
\t";
        // line 15
        if (array_key_exists("morale", $context)) {
            // line 16
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["morale"] ?? $this->getContext($context, "morale")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 17
                echo "\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4>Inscription à la mutuelle étudiante ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "raisonsocial", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "url", array()), "html", null, true);
                echo "\" role=\"button\" target=\"_blank\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "alt", array()), "html", null, true);
                echo "\">Cliquez Ici</a>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t";
        }
        
        $__internal_4c3458d7c093916d7051c71bccad95665759544f7b58f96ab71dc0fe13f3b090->leave($__internal_4c3458d7c093916d7051c71bccad95665759544f7b58f96ab71dc0fe13f3b090_prof);

        
        $__internal_97a2fc1e6d35d893fa9778d4ae2413d2a15bd7256e76ca8b0afe923183d12e8e->leave($__internal_97a2fc1e6d35d893fa9778d4ae2413d2a15bd7256e76ca8b0afe923183d12e8e_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mutuelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  123 => 27,  113 => 20,  108 => 17,  103 => 16,  101 => 15,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
{% endblock %}

{% block Content %} 
\t{% if morale is defined %}
\t\t{% for row in morale %}
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4>Inscription à la mutuelle étudiante {{ row.raisonsocial }}</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{ row.url }}\" role=\"button\" target=\"_blank\" alt=\"{{ row.alt }}\">Cliquez Ici</a>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t{% endif %}
{% endblock %}", "ESFEspaceAbonneBundle:back:mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mutuelle.html.twig");
    }
}
