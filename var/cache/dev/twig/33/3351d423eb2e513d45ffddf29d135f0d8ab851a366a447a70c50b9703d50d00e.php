<?php

/* ESFEspaceAbonneBundle:back:aide.html.twig */
class __TwigTemplate_5efd92214e22701638a739f59872f2ef4aa1aed6e1e02cf6f164ce0ffaf0c63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:aide.html.twig", 1);
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
        $__internal_da1778298249a0a042a8b3f07fd10c4e419621b6af67a8e0a31210da8ecb20af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1778298249a0a042a8b3f07fd10c4e419621b6af67a8e0a31210da8ecb20af->enter($__internal_da1778298249a0a042a8b3f07fd10c4e419621b6af67a8e0a31210da8ecb20af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $__internal_c47c01ee3cf26bfe5acfbcee6a2beb957319c3ec87a4e8d1e4f3a0f3b4f37ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47c01ee3cf26bfe5acfbcee6a2beb957319c3ec87a4e8d1e4f3a0f3b4f37ebb->enter($__internal_c47c01ee3cf26bfe5acfbcee6a2beb957319c3ec87a4e8d1e4f3a0f3b4f37ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1778298249a0a042a8b3f07fd10c4e419621b6af67a8e0a31210da8ecb20af->leave($__internal_da1778298249a0a042a8b3f07fd10c4e419621b6af67a8e0a31210da8ecb20af_prof);

        
        $__internal_c47c01ee3cf26bfe5acfbcee6a2beb957319c3ec87a4e8d1e4f3a0f3b4f37ebb->leave($__internal_c47c01ee3cf26bfe5acfbcee6a2beb957319c3ec87a4e8d1e4f3a0f3b4f37ebb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9106f89d7568e4d4e1ca42f6d5ccf757682c514cf21819442580263b379adac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9106f89d7568e4d4e1ca42f6d5ccf757682c514cf21819442580263b379adac0->enter($__internal_9106f89d7568e4d4e1ca42f6d5ccf757682c514cf21819442580263b379adac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e0281a82f26be88771cd479c709e7b4895a3f4aa413f9f03745a361d493b264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0281a82f26be88771cd479c709e7b4895a3f4aa413f9f03745a361d493b264->enter($__internal_7e0281a82f26be88771cd479c709e7b4895a3f4aa413f9f03745a361d493b264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e0281a82f26be88771cd479c709e7b4895a3f4aa413f9f03745a361d493b264->leave($__internal_7e0281a82f26be88771cd479c709e7b4895a3f4aa413f9f03745a361d493b264_prof);

        
        $__internal_9106f89d7568e4d4e1ca42f6d5ccf757682c514cf21819442580263b379adac0->leave($__internal_9106f89d7568e4d4e1ca42f6d5ccf757682c514cf21819442580263b379adac0_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8cd999ea1cfc9f716cbf8eaab0ffc5fd26f6b80c532eacb4a34a36e34365f7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd999ea1cfc9f716cbf8eaab0ffc5fd26f6b80c532eacb4a34a36e34365f7da->enter($__internal_8cd999ea1cfc9f716cbf8eaab0ffc5fd26f6b80c532eacb4a34a36e34365f7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_35b72ea9703e1d8c2b75898b35c52ceef79f0af94ee1476efe8154d03e2a37a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b72ea9703e1d8c2b75898b35c52ceef79f0af94ee1476efe8154d03e2a37a7->enter($__internal_35b72ea9703e1d8c2b75898b35c52ceef79f0af94ee1476efe8154d03e2a37a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_35b72ea9703e1d8c2b75898b35c52ceef79f0af94ee1476efe8154d03e2a37a7->leave($__internal_35b72ea9703e1d8c2b75898b35c52ceef79f0af94ee1476efe8154d03e2a37a7_prof);

        
        $__internal_8cd999ea1cfc9f716cbf8eaab0ffc5fd26f6b80c532eacb4a34a36e34365f7da->leave($__internal_8cd999ea1cfc9f716cbf8eaab0ffc5fd26f6b80c532eacb4a34a36e34365f7da_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_5d77ccfb968950dbd37e45e8b5d642c05d0bd2e0034fa053f045ed0448a46240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d77ccfb968950dbd37e45e8b5d642c05d0bd2e0034fa053f045ed0448a46240->enter($__internal_5d77ccfb968950dbd37e45e8b5d642c05d0bd2e0034fa053f045ed0448a46240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_043815a206e9bda3cc9223223e34f53bbab5512a303693c6d1b03888d7ecd004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043815a206e9bda3cc9223223e34f53bbab5512a303693c6d1b03888d7ecd004->enter($__internal_043815a206e9bda3cc9223223e34f53bbab5512a303693c6d1b03888d7ecd004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_043815a206e9bda3cc9223223e34f53bbab5512a303693c6d1b03888d7ecd004->leave($__internal_043815a206e9bda3cc9223223e34f53bbab5512a303693c6d1b03888d7ecd004_prof);

        
        $__internal_5d77ccfb968950dbd37e45e8b5d642c05d0bd2e0034fa053f045ed0448a46240->leave($__internal_5d77ccfb968950dbd37e45e8b5d642c05d0bd2e0034fa053f045ed0448a46240_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:aide.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:aide.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/aide.html.twig");
    }
}
