<?php

/* ESFEspaceAbonneBundle:Default:langueThree.html.twig */
class __TwigTemplate_83f502651acf457f08f4492108b5c0625e849591b06205cae17d439cd7b9d138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:langueThree.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec2ae7ddc591fb0049fb4a160dccf304c6c485baaa9ebe8f02eeda048ae2cfad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2ae7ddc591fb0049fb4a160dccf304c6c485baaa9ebe8f02eeda048ae2cfad->enter($__internal_ec2ae7ddc591fb0049fb4a160dccf304c6c485baaa9ebe8f02eeda048ae2cfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:langueThree.html.twig"));

        $__internal_c4daf5265c2b0b1707c60fc4f6406a21d4c2e063aa3fc877276280bb4e77857f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4daf5265c2b0b1707c60fc4f6406a21d4c2e063aa3fc877276280bb4e77857f->enter($__internal_c4daf5265c2b0b1707c60fc4f6406a21d4c2e063aa3fc877276280bb4e77857f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec2ae7ddc591fb0049fb4a160dccf304c6c485baaa9ebe8f02eeda048ae2cfad->leave($__internal_ec2ae7ddc591fb0049fb4a160dccf304c6c485baaa9ebe8f02eeda048ae2cfad_prof);

        
        $__internal_c4daf5265c2b0b1707c60fc4f6406a21d4c2e063aa3fc877276280bb4e77857f->leave($__internal_c4daf5265c2b0b1707c60fc4f6406a21d4c2e063aa3fc877276280bb4e77857f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_169e4b2375b96ab06c87660bfae38d7922aa478064b2cc382b50997970cb5678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169e4b2375b96ab06c87660bfae38d7922aa478064b2cc382b50997970cb5678->enter($__internal_169e4b2375b96ab06c87660bfae38d7922aa478064b2cc382b50997970cb5678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b877ecbed57f5ae5cc26017e3dfd741613b5e5827ca19a54eb8d066c1fe9061a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b877ecbed57f5ae5cc26017e3dfd741613b5e5827ca19a54eb8d066c1fe9061a->enter($__internal_b877ecbed57f5ae5cc26017e3dfd741613b5e5827ca19a54eb8d066c1fe9061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b877ecbed57f5ae5cc26017e3dfd741613b5e5827ca19a54eb8d066c1fe9061a->leave($__internal_b877ecbed57f5ae5cc26017e3dfd741613b5e5827ca19a54eb8d066c1fe9061a_prof);

        
        $__internal_169e4b2375b96ab06c87660bfae38d7922aa478064b2cc382b50997970cb5678->leave($__internal_169e4b2375b96ab06c87660bfae38d7922aa478064b2cc382b50997970cb5678_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_741eeea2bb507f93ec93fdac533a1e7f51bc626f6b8011f0181830c58ccadc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741eeea2bb507f93ec93fdac533a1e7f51bc626f6b8011f0181830c58ccadc20->enter($__internal_741eeea2bb507f93ec93fdac533a1e7f51bc626f6b8011f0181830c58ccadc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_0d765506abc24878968dc7fb843bc259ce82798d0eb8b884ed586c83e1aef3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d765506abc24878968dc7fb843bc259ce82798d0eb8b884ed586c83e1aef3bc->enter($__internal_0d765506abc24878968dc7fb843bc259ce82798d0eb8b884ed586c83e1aef3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

      ";
        // line 15
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 16
            echo "        <div class=\"alert alert-error\">
          ";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
      ";
        }
        // line 20
        echo "
      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsOne");
        echo "\">Retour à l'étape 1</a>
           ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
         </div>
       </div>
     </div>

     ";
        // line 44
        echo "     ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

     ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
   </div>
 </div>


";
        
        $__internal_0d765506abc24878968dc7fb843bc259ce82798d0eb8b884ed586c83e1aef3bc->leave($__internal_0d765506abc24878968dc7fb843bc259ce82798d0eb8b884ed586c83e1aef3bc_prof);

        
        $__internal_741eeea2bb507f93ec93fdac533a1e7f51bc626f6b8011f0181830c58ccadc20->leave($__internal_741eeea2bb507f93ec93fdac533a1e7f51bc626f6b8011f0181830c58ccadc20_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:langueThree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  135 => 44,  127 => 38,  123 => 37,  112 => 29,  103 => 23,  99 => 22,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  79 => 13,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
  Inscription Langue - {{ parent() }}
{% endblock %}

{% block Content %} 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      {{ form_start(form) }}

      {% if not form.vars.valid %}
        <div class=\"alert alert-error\">
          {{ form_errors(form) }}
        </div>
      {% endif %}

      <div class=\"form-group\">
        {{ form_label(form.documentinscription.nom, 'Document d\\'Inscription') }}
        {{ form_widget(form.documentinscription.nom) }}
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            {{ form_widget(form.documentinscription.pdfFile) }}
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_langueStepsOne') }}\">Retour à l'étape 1</a>
           {{ form_widget(form.documentinscription.Enregistrer) }}
         </div>
       </div>
     </div>

     {# Token CSRF #}
     {{ form_widget(form._token) }}

     {{ form_end(form, {'render_rest': false }) }}
   </div>
 </div>


{% endblock %}
", "ESFEspaceAbonneBundle:Default:langueThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/langueThree.html.twig");
    }
}
