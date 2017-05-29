<?php

/* ESFEspaceAbonneBundle:Back:mesparametresMDP.html.twig */
class __TwigTemplate_45f489d0aa3bc74c3ff0e4400dec180aa22ec72b4d8e2b965aa085b4b5a0fc12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:mesparametresMDP.html.twig", 1);
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
        $__internal_478a5c5fea66a1f739554f6e46fe1cad8ada39b30305ce128842b1deec733019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478a5c5fea66a1f739554f6e46fe1cad8ada39b30305ce128842b1deec733019->enter($__internal_478a5c5fea66a1f739554f6e46fe1cad8ada39b30305ce128842b1deec733019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesparametresMDP.html.twig"));

        $__internal_71d3ba6511252be5237d44f02594cc07400502cde4fb4ada7ec44b4942c640dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d3ba6511252be5237d44f02594cc07400502cde4fb4ada7ec44b4942c640dd->enter($__internal_71d3ba6511252be5237d44f02594cc07400502cde4fb4ada7ec44b4942c640dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesparametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478a5c5fea66a1f739554f6e46fe1cad8ada39b30305ce128842b1deec733019->leave($__internal_478a5c5fea66a1f739554f6e46fe1cad8ada39b30305ce128842b1deec733019_prof);

        
        $__internal_71d3ba6511252be5237d44f02594cc07400502cde4fb4ada7ec44b4942c640dd->leave($__internal_71d3ba6511252be5237d44f02594cc07400502cde4fb4ada7ec44b4942c640dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3f394bde66ceeeebad48283234714da58f148ac8a1e294880d6d402dcbd4a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f394bde66ceeeebad48283234714da58f148ac8a1e294880d6d402dcbd4a42->enter($__internal_e3f394bde66ceeeebad48283234714da58f148ac8a1e294880d6d402dcbd4a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1d414c117dcbb1a5d7388808d5e6a429da452e7900e196ba858499bdc917c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d414c117dcbb1a5d7388808d5e6a429da452e7900e196ba858499bdc917c51->enter($__internal_c1d414c117dcbb1a5d7388808d5e6a429da452e7900e196ba858499bdc917c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c1d414c117dcbb1a5d7388808d5e6a429da452e7900e196ba858499bdc917c51->leave($__internal_c1d414c117dcbb1a5d7388808d5e6a429da452e7900e196ba858499bdc917c51_prof);

        
        $__internal_e3f394bde66ceeeebad48283234714da58f148ac8a1e294880d6d402dcbd4a42->leave($__internal_e3f394bde66ceeeebad48283234714da58f148ac8a1e294880d6d402dcbd4a42_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_598dfe0a0f2b58e8e8cf7379303437023bc6caa0f2dc813f9631dc8150d31f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598dfe0a0f2b58e8e8cf7379303437023bc6caa0f2dc813f9631dc8150d31f3a->enter($__internal_598dfe0a0f2b58e8e8cf7379303437023bc6caa0f2dc813f9631dc8150d31f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_e0cc6d60412fd1cd3d381d82e82b70f1cca5d6e3c1a769cab5b70f18eb23b48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cc6d60412fd1cd3d381d82e82b70f1cca5d6e3c1a769cab5b70f18eb23b48b->enter($__internal_e0cc6d60412fd1cd3d381d82e82b70f1cca5d6e3c1a769cab5b70f18eb23b48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_e0cc6d60412fd1cd3d381d82e82b70f1cca5d6e3c1a769cab5b70f18eb23b48b->leave($__internal_e0cc6d60412fd1cd3d381d82e82b70f1cca5d6e3c1a769cab5b70f18eb23b48b_prof);

        
        $__internal_598dfe0a0f2b58e8e8cf7379303437023bc6caa0f2dc813f9631dc8150d31f3a->leave($__internal_598dfe0a0f2b58e8e8cf7379303437023bc6caa0f2dc813f9631dc8150d31f3a_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_9d4f4f97a650390a2fc064fe6b5ecb4a7a0d1540c88b0f34936b70d80032bd13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4f4f97a650390a2fc064fe6b5ecb4a7a0d1540c88b0f34936b70d80032bd13->enter($__internal_9d4f4f97a650390a2fc064fe6b5ecb4a7a0d1540c88b0f34936b70d80032bd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_05160458bd4e403d52b1f0669e22ff1c3645bd51d19c50c604ded617583970a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05160458bd4e403d52b1f0669e22ff1c3645bd51d19c50c604ded617583970a8->enter($__internal_05160458bd4e403d52b1f0669e22ff1c3645bd51d19c50c604ded617583970a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
 

<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "  <div class=\"alert alert-error\">
    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
  </div>
";
        }
        // line 25
        echo "
<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
     ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 33
        echo "    </div>
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>            
</div>      
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_05160458bd4e403d52b1f0669e22ff1c3645bd51d19c50c604ded617583970a8->leave($__internal_05160458bd4e403d52b1f0669e22ff1c3645bd51d19c50c604ded617583970a8_prof);

        
        $__internal_9d4f4f97a650390a2fc064fe6b5ecb4a7a0d1540c88b0f34936b70d80032bd13->leave($__internal_9d4f4f97a650390a2fc064fe6b5ecb4a7a0d1540c88b0f34936b70d80032bd13_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:mesparametresMDP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  138 => 34,  135 => 33,  130 => 30,  126 => 29,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
{% endblock %}

{% block Content %} 
 

<!-- Mes Parametres -->
{{ form_start(form) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
     {{ form_widget(form) }}
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'change_password.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>            
</div>      
{{ form_end(form) }}
</div>
{% endblock %}", "ESFEspaceAbonneBundle:Back:mesparametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/mesparametresMDP.html.twig");
    }
}
