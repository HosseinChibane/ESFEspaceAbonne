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
        $__internal_23e04d28d7146dbf45cc3da0af1ef573f960f293deb69f48dc63b7f9e92c3883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e04d28d7146dbf45cc3da0af1ef573f960f293deb69f48dc63b7f9e92c3883->enter($__internal_23e04d28d7146dbf45cc3da0af1ef573f960f293deb69f48dc63b7f9e92c3883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $__internal_d2ba4215f1f430aa24e37b7625dec7f1831ff1a2b969d17e5e72b234d0bed866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ba4215f1f430aa24e37b7625dec7f1831ff1a2b969d17e5e72b234d0bed866->enter($__internal_d2ba4215f1f430aa24e37b7625dec7f1831ff1a2b969d17e5e72b234d0bed866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23e04d28d7146dbf45cc3da0af1ef573f960f293deb69f48dc63b7f9e92c3883->leave($__internal_23e04d28d7146dbf45cc3da0af1ef573f960f293deb69f48dc63b7f9e92c3883_prof);

        
        $__internal_d2ba4215f1f430aa24e37b7625dec7f1831ff1a2b969d17e5e72b234d0bed866->leave($__internal_d2ba4215f1f430aa24e37b7625dec7f1831ff1a2b969d17e5e72b234d0bed866_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc0a80274ccef5fa8ab68c1908bf9540491013622b6ef014bf1582ba96679349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0a80274ccef5fa8ab68c1908bf9540491013622b6ef014bf1582ba96679349->enter($__internal_cc0a80274ccef5fa8ab68c1908bf9540491013622b6ef014bf1582ba96679349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d22bddc6387f38d4a1672e9cb8bfb6c323ff99930875ed4b1a953374b4325d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22bddc6387f38d4a1672e9cb8bfb6c323ff99930875ed4b1a953374b4325d67->enter($__internal_d22bddc6387f38d4a1672e9cb8bfb6c323ff99930875ed4b1a953374b4325d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d22bddc6387f38d4a1672e9cb8bfb6c323ff99930875ed4b1a953374b4325d67->leave($__internal_d22bddc6387f38d4a1672e9cb8bfb6c323ff99930875ed4b1a953374b4325d67_prof);

        
        $__internal_cc0a80274ccef5fa8ab68c1908bf9540491013622b6ef014bf1582ba96679349->leave($__internal_cc0a80274ccef5fa8ab68c1908bf9540491013622b6ef014bf1582ba96679349_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_003741b451b141a7371b2ed801c2c7574d0598d8ebdc3c957bba8f4e35fce0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003741b451b141a7371b2ed801c2c7574d0598d8ebdc3c957bba8f4e35fce0eb->enter($__internal_003741b451b141a7371b2ed801c2c7574d0598d8ebdc3c957bba8f4e35fce0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6901a25127a112adecce0add2e5d61cfe7a6fb9fb1d86c7f752fd2ec8e131baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6901a25127a112adecce0add2e5d61cfe7a6fb9fb1d86c7f752fd2ec8e131baa->enter($__internal_6901a25127a112adecce0add2e5d61cfe7a6fb9fb1d86c7f752fd2ec8e131baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_6901a25127a112adecce0add2e5d61cfe7a6fb9fb1d86c7f752fd2ec8e131baa->leave($__internal_6901a25127a112adecce0add2e5d61cfe7a6fb9fb1d86c7f752fd2ec8e131baa_prof);

        
        $__internal_003741b451b141a7371b2ed801c2c7574d0598d8ebdc3c957bba8f4e35fce0eb->leave($__internal_003741b451b141a7371b2ed801c2c7574d0598d8ebdc3c957bba8f4e35fce0eb_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_47ec1fda92583409a469d2d0bc886b3098448f3decd58a925a3698240a59ac46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ec1fda92583409a469d2d0bc886b3098448f3decd58a925a3698240a59ac46->enter($__internal_47ec1fda92583409a469d2d0bc886b3098448f3decd58a925a3698240a59ac46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_1d50aa9b09698462211224e6e1a0c4941f24af40eb984a054ed1fd299c3c20c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d50aa9b09698462211224e6e1a0c4941f24af40eb984a054ed1fd299c3c20c5->enter($__internal_1d50aa9b09698462211224e6e1a0c4941f24af40eb984a054ed1fd299c3c20c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_1d50aa9b09698462211224e6e1a0c4941f24af40eb984a054ed1fd299c3c20c5->leave($__internal_1d50aa9b09698462211224e6e1a0c4941f24af40eb984a054ed1fd299c3c20c5_prof);

        
        $__internal_47ec1fda92583409a469d2d0bc886b3098448f3decd58a925a3698240a59ac46->leave($__internal_47ec1fda92583409a469d2d0bc886b3098448f3decd58a925a3698240a59ac46_prof);

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
