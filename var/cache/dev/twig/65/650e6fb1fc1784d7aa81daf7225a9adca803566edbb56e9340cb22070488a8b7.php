<?php

/* @ESFEspaceAbonne/back/mutuelle.html.twig */
class __TwigTemplate_af30598cf6f5606da4912f60d9c18c639882c5af572ae441a93e3911cf81cf07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mutuelle.html.twig", 1);
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
        $__internal_2a2d92c4a06bbdad28ac714ac7c200e9ad64dfcae5ea743eef75d8dbc924a673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2d92c4a06bbdad28ac714ac7c200e9ad64dfcae5ea743eef75d8dbc924a673->enter($__internal_2a2d92c4a06bbdad28ac714ac7c200e9ad64dfcae5ea743eef75d8dbc924a673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mutuelle.html.twig"));

        $__internal_97eef06a314261ed67613d60c88a8a899d72977bcba29dbb7ffff8cfc85b8eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97eef06a314261ed67613d60c88a8a899d72977bcba29dbb7ffff8cfc85b8eea->enter($__internal_97eef06a314261ed67613d60c88a8a899d72977bcba29dbb7ffff8cfc85b8eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a2d92c4a06bbdad28ac714ac7c200e9ad64dfcae5ea743eef75d8dbc924a673->leave($__internal_2a2d92c4a06bbdad28ac714ac7c200e9ad64dfcae5ea743eef75d8dbc924a673_prof);

        
        $__internal_97eef06a314261ed67613d60c88a8a899d72977bcba29dbb7ffff8cfc85b8eea->leave($__internal_97eef06a314261ed67613d60c88a8a899d72977bcba29dbb7ffff8cfc85b8eea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ef5965a70853667abb4cdd655d5f8efa69f851fe53875b57007f2739bfeb544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef5965a70853667abb4cdd655d5f8efa69f851fe53875b57007f2739bfeb544->enter($__internal_9ef5965a70853667abb4cdd655d5f8efa69f851fe53875b57007f2739bfeb544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa28a442a23ea293ece2e1b1ec4cf07c60e684c4b213303e47b8b2c62cceb7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa28a442a23ea293ece2e1b1ec4cf07c60e684c4b213303e47b8b2c62cceb7da->enter($__internal_aa28a442a23ea293ece2e1b1ec4cf07c60e684c4b213303e47b8b2c62cceb7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aa28a442a23ea293ece2e1b1ec4cf07c60e684c4b213303e47b8b2c62cceb7da->leave($__internal_aa28a442a23ea293ece2e1b1ec4cf07c60e684c4b213303e47b8b2c62cceb7da_prof);

        
        $__internal_9ef5965a70853667abb4cdd655d5f8efa69f851fe53875b57007f2739bfeb544->leave($__internal_9ef5965a70853667abb4cdd655d5f8efa69f851fe53875b57007f2739bfeb544_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7ebfc6a3ac2b2f16da955021fd9efa1805d66587839a3a7e332682de800e537a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebfc6a3ac2b2f16da955021fd9efa1805d66587839a3a7e332682de800e537a->enter($__internal_7ebfc6a3ac2b2f16da955021fd9efa1805d66587839a3a7e332682de800e537a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_d973034a0d25dd999995789b97736c36ae877e258a1cf92798042b1d42ab994e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d973034a0d25dd999995789b97736c36ae877e258a1cf92798042b1d42ab994e->enter($__internal_d973034a0d25dd999995789b97736c36ae877e258a1cf92798042b1d42ab994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_d973034a0d25dd999995789b97736c36ae877e258a1cf92798042b1d42ab994e->leave($__internal_d973034a0d25dd999995789b97736c36ae877e258a1cf92798042b1d42ab994e_prof);

        
        $__internal_7ebfc6a3ac2b2f16da955021fd9efa1805d66587839a3a7e332682de800e537a->leave($__internal_7ebfc6a3ac2b2f16da955021fd9efa1805d66587839a3a7e332682de800e537a_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_be3b638e41c0d24100fd68a8b21165ca0b7bb945499a8254ac67f0f863d8113a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3b638e41c0d24100fd68a8b21165ca0b7bb945499a8254ac67f0f863d8113a->enter($__internal_be3b638e41c0d24100fd68a8b21165ca0b7bb945499a8254ac67f0f863d8113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_f5a953716c5cfb88ad28c059e3ac4a9d0872fbb2f12dca808e7dc8e8c4c59bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a953716c5cfb88ad28c059e3ac4a9d0872fbb2f12dca808e7dc8e8c4c59bfc->enter($__internal_f5a953716c5cfb88ad28c059e3ac4a9d0872fbb2f12dca808e7dc8e8c4c59bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_f5a953716c5cfb88ad28c059e3ac4a9d0872fbb2f12dca808e7dc8e8c4c59bfc->leave($__internal_f5a953716c5cfb88ad28c059e3ac4a9d0872fbb2f12dca808e7dc8e8c4c59bfc_prof);

        
        $__internal_be3b638e41c0d24100fd68a8b21165ca0b7bb945499a8254ac67f0f863d8113a->leave($__internal_be3b638e41c0d24100fd68a8b21165ca0b7bb945499a8254ac67f0f863d8113a_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mutuelle.html.twig";
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
{% endblock %}", "@ESFEspaceAbonne/back/mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mutuelle.html.twig");
    }
}
