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
        $__internal_14540ec9ec953cf7500770bb50269088990755c69952f82770f9e49635767ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14540ec9ec953cf7500770bb50269088990755c69952f82770f9e49635767ce8->enter($__internal_14540ec9ec953cf7500770bb50269088990755c69952f82770f9e49635767ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $__internal_277c722dcdca4fc42578cccbbd4413cea1abe76a9fc26362560bf0d2cfa6e84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277c722dcdca4fc42578cccbbd4413cea1abe76a9fc26362560bf0d2cfa6e84f->enter($__internal_277c722dcdca4fc42578cccbbd4413cea1abe76a9fc26362560bf0d2cfa6e84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14540ec9ec953cf7500770bb50269088990755c69952f82770f9e49635767ce8->leave($__internal_14540ec9ec953cf7500770bb50269088990755c69952f82770f9e49635767ce8_prof);

        
        $__internal_277c722dcdca4fc42578cccbbd4413cea1abe76a9fc26362560bf0d2cfa6e84f->leave($__internal_277c722dcdca4fc42578cccbbd4413cea1abe76a9fc26362560bf0d2cfa6e84f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4438d673ccdebb86eba933c9a8a06ea54748b2438d2214c301f7ab7fdbbb9f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4438d673ccdebb86eba933c9a8a06ea54748b2438d2214c301f7ab7fdbbb9f7d->enter($__internal_4438d673ccdebb86eba933c9a8a06ea54748b2438d2214c301f7ab7fdbbb9f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f76596a66fe6f2b30eb31374610f4434522b9d9cfc35a064609bfe6848f93b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76596a66fe6f2b30eb31374610f4434522b9d9cfc35a064609bfe6848f93b70->enter($__internal_f76596a66fe6f2b30eb31374610f4434522b9d9cfc35a064609bfe6848f93b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f76596a66fe6f2b30eb31374610f4434522b9d9cfc35a064609bfe6848f93b70->leave($__internal_f76596a66fe6f2b30eb31374610f4434522b9d9cfc35a064609bfe6848f93b70_prof);

        
        $__internal_4438d673ccdebb86eba933c9a8a06ea54748b2438d2214c301f7ab7fdbbb9f7d->leave($__internal_4438d673ccdebb86eba933c9a8a06ea54748b2438d2214c301f7ab7fdbbb9f7d_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7f90500b696de9da8fccd4d1577d3ef214aaf5b51fc6c9ad74a08e14787f95a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f90500b696de9da8fccd4d1577d3ef214aaf5b51fc6c9ad74a08e14787f95a8->enter($__internal_7f90500b696de9da8fccd4d1577d3ef214aaf5b51fc6c9ad74a08e14787f95a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_c30a392b8d513915afda0b328183ca92fa7ba0b7eaa6b384cb57a1f6a9a5871b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30a392b8d513915afda0b328183ca92fa7ba0b7eaa6b384cb57a1f6a9a5871b->enter($__internal_c30a392b8d513915afda0b328183ca92fa7ba0b7eaa6b384cb57a1f6a9a5871b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_c30a392b8d513915afda0b328183ca92fa7ba0b7eaa6b384cb57a1f6a9a5871b->leave($__internal_c30a392b8d513915afda0b328183ca92fa7ba0b7eaa6b384cb57a1f6a9a5871b_prof);

        
        $__internal_7f90500b696de9da8fccd4d1577d3ef214aaf5b51fc6c9ad74a08e14787f95a8->leave($__internal_7f90500b696de9da8fccd4d1577d3ef214aaf5b51fc6c9ad74a08e14787f95a8_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d34012b6124748a15ded14df78f54ac7fdeea637e120834cab32777a700c2365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34012b6124748a15ded14df78f54ac7fdeea637e120834cab32777a700c2365->enter($__internal_d34012b6124748a15ded14df78f54ac7fdeea637e120834cab32777a700c2365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_9e3c0ac2700a091921f3c483927ba07d74c489f42e6623fb574e3e5e588eb2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3c0ac2700a091921f3c483927ba07d74c489f42e6623fb574e3e5e588eb2f9->enter($__internal_9e3c0ac2700a091921f3c483927ba07d74c489f42e6623fb574e3e5e588eb2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_9e3c0ac2700a091921f3c483927ba07d74c489f42e6623fb574e3e5e588eb2f9->leave($__internal_9e3c0ac2700a091921f3c483927ba07d74c489f42e6623fb574e3e5e588eb2f9_prof);

        
        $__internal_d34012b6124748a15ded14df78f54ac7fdeea637e120834cab32777a700c2365->leave($__internal_d34012b6124748a15ded14df78f54ac7fdeea637e120834cab32777a700c2365_prof);

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
