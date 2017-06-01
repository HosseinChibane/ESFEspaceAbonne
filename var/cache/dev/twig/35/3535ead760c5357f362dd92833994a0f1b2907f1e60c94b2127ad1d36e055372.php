<?php

/* @ESFEspaceAbonne/back/aide.html.twig */
class __TwigTemplate_608508880415857895d4786836c4ff7c46d76c6dd909b15aac853ef740f7a036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/aide.html.twig", 1);
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
        $__internal_08b2d41fd435d6b249570ddad3f335cc718a89ff103b5779e883b354b7da46a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b2d41fd435d6b249570ddad3f335cc718a89ff103b5779e883b354b7da46a9->enter($__internal_08b2d41fd435d6b249570ddad3f335cc718a89ff103b5779e883b354b7da46a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $__internal_33d1d090c3963a6932ef9df566819a2401963c85f0ab4eed45615628e3d6bb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d1d090c3963a6932ef9df566819a2401963c85f0ab4eed45615628e3d6bb8a->enter($__internal_33d1d090c3963a6932ef9df566819a2401963c85f0ab4eed45615628e3d6bb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08b2d41fd435d6b249570ddad3f335cc718a89ff103b5779e883b354b7da46a9->leave($__internal_08b2d41fd435d6b249570ddad3f335cc718a89ff103b5779e883b354b7da46a9_prof);

        
        $__internal_33d1d090c3963a6932ef9df566819a2401963c85f0ab4eed45615628e3d6bb8a->leave($__internal_33d1d090c3963a6932ef9df566819a2401963c85f0ab4eed45615628e3d6bb8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b440a0602da32f4817b06d5e35b5f8f49c464d9440ab87194dd747f6e30482bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b440a0602da32f4817b06d5e35b5f8f49c464d9440ab87194dd747f6e30482bb->enter($__internal_b440a0602da32f4817b06d5e35b5f8f49c464d9440ab87194dd747f6e30482bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef46af53ea2492f838c700a4fd976f3dcfa254d9ff22b0e871958855711275fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef46af53ea2492f838c700a4fd976f3dcfa254d9ff22b0e871958855711275fe->enter($__internal_ef46af53ea2492f838c700a4fd976f3dcfa254d9ff22b0e871958855711275fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ef46af53ea2492f838c700a4fd976f3dcfa254d9ff22b0e871958855711275fe->leave($__internal_ef46af53ea2492f838c700a4fd976f3dcfa254d9ff22b0e871958855711275fe_prof);

        
        $__internal_b440a0602da32f4817b06d5e35b5f8f49c464d9440ab87194dd747f6e30482bb->leave($__internal_b440a0602da32f4817b06d5e35b5f8f49c464d9440ab87194dd747f6e30482bb_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_15f059300f8df7beed8d3ef5b650b204bd468cf0a9c6981edc522406599b9331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f059300f8df7beed8d3ef5b650b204bd468cf0a9c6981edc522406599b9331->enter($__internal_15f059300f8df7beed8d3ef5b650b204bd468cf0a9c6981edc522406599b9331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ba5fc4f9e87de6318386911b7c1fc7feee4960509916890358e61b2cc57f7df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5fc4f9e87de6318386911b7c1fc7feee4960509916890358e61b2cc57f7df7->enter($__internal_ba5fc4f9e87de6318386911b7c1fc7feee4960509916890358e61b2cc57f7df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 7
        echo "
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">FAQ</li>
    </ol>
";
        
        $__internal_ba5fc4f9e87de6318386911b7c1fc7feee4960509916890358e61b2cc57f7df7->leave($__internal_ba5fc4f9e87de6318386911b7c1fc7feee4960509916890358e61b2cc57f7df7_prof);

        
        $__internal_15f059300f8df7beed8d3ef5b650b204bd468cf0a9c6981edc522406599b9331->leave($__internal_15f059300f8df7beed8d3ef5b650b204bd468cf0a9c6981edc522406599b9331_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_bca92b4ff3a1b0629fe6ab230cc3624100908e194e8e9cfe849d8d1b55c305a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca92b4ff3a1b0629fe6ab230cc3624100908e194e8e9cfe849d8d1b55c305a7->enter($__internal_bca92b4ff3a1b0629fe6ab230cc3624100908e194e8e9cfe849d8d1b55c305a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_796af2a7583952981d31417a04be5c6d60fb607a7aa6ff305521a199e58af9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796af2a7583952981d31417a04be5c6d60fb607a7aa6ff305521a199e58af9c5->enter($__internal_796af2a7583952981d31417a04be5c6d60fb607a7aa6ff305521a199e58af9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 15
        echo "\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Content Row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
        // line 21
        if (array_key_exists("listFAQ", $context)) {
            // line 22
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listFAQ"] ?? $this->getContext($context, "listFAQ")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowFAQ"]) {
                // line 23
                echo "\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "question", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "reponse", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowFAQ'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.panel-group -->
\t\t\t</div>
\t\t\t<!-- /.col-lg-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
";
        
        $__internal_796af2a7583952981d31417a04be5c6d60fb607a7aa6ff305521a199e58af9c5->leave($__internal_796af2a7583952981d31417a04be5c6d60fb607a7aa6ff305521a199e58af9c5_prof);

        
        $__internal_bca92b4ff3a1b0629fe6ab230cc3624100908e194e8e9cfe849d8d1b55c305a7->leave($__internal_bca92b4ff3a1b0629fe6ab230cc3624100908e194e8e9cfe849d8d1b55c305a7_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/aide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 39,  146 => 38,  134 => 32,  129 => 30,  121 => 27,  115 => 23,  110 => 22,  108 => 21,  100 => 15,  91 => 14,  77 => 9,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
\tAide - {{ parent() }}
{% endblock %}
{% block breadcrumb %}

    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">FAQ</li>
    </ol>
{% endblock %}

{% block Content %}
\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Content Row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t{% if listFAQ is defined %}
\t\t\t\t\t\t{% for rowFAQ in listFAQ %}
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#{{ rowFAQ.id }}\">{{ rowFAQ.question}}</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"{{ rowFAQ.id }}\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t{{ rowFAQ.reponse }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<!-- /.panel-group -->
\t\t\t</div>
\t\t\t<!-- /.col-lg-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
{% endblock %}", "@ESFEspaceAbonne/back/aide.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\aide.html.twig");
    }
}
